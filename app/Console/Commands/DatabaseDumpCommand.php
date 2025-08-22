<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Config;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Carbon\Carbon;

class DatabaseDumpCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:dump 
                            {--filename= : Custom filename for the dump}
                            {--path= : Path where to store the dump}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a database dump file';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $connection = Config::get('database.default');
        $this->info("Using database connection: {$connection}");
        
        $config = Config::get("database.connections.{$connection}");
        
        if (!$config) {
            $this->error("Could not find configuration for database connection: {$connection}");
            return 1;
        }
        
        // Get path from option or use default storage path
        $path = $this->option('path') ?: storage_path('app/backups');
        
        // Create directory if it doesn't exist
        if (!File::exists($path)) {
            File::makeDirectory($path, 0755, true);
            $this->info("Created backup directory: {$path}");
        }
        
        // Generate filename
        $filename = $this->option('filename') ?: 
            $config['database'] . '_' . Carbon::now()->format('Y-m-d_His') . '.sql';
        
        $filepath = $path . '/' . $filename;
        
        switch ($config['driver']) {
            case 'mysql':
                return $this->dumpMysql($config, $filepath);
            case 'pgsql':
                return $this->dumpPostgres($config, $filepath);
            case 'sqlite':
                return $this->dumpSqlite($config, $filepath);
            default:
                $this->error("Database driver {$config['driver']} is not supported for dumps");
                return 1;
        }
    }
    
    /**
     * Dump MySQL database.
     *
     * @param array $config
     * @param string $filepath
     * @return int
     */
    protected function dumpMysql(array $config, string $filepath)
    {
        $command = [
            'mysqldump',
            '--user=' . $config['username'],
            '--host=' . ($config['host'] ?? '127.0.0.1'),
            '--column-statistics=0',
        ];
        
        if (isset($config['port'])) {
            $command[] = '--port=' . $config['port'];
        }
        
        if (isset($config['password']) && !empty($config['password'])) {
            $command[] = '--password=' . $config['password'];
        }
        
        $command[] = $config['database'];
        $command[] = '>';
        $command[] = $filepath;
        
        $this->info('Creating MySQL dump...');
        
        // For security, don't show the full command with password
        $this->comment('Running: mysqldump for ' . $config['database']);
        
        $process = Process::fromShellCommandline(implode(' ', $command));
        $process->setTimeout(3600); // 1 hour timeout
        
        try {
            $process->mustRun();
            $this->info("Database dump created successfully: {$filepath}");
            $this->info("Size: " . round(File::size($filepath) / 1024 / 1024, 2) . " MB");
            return 0;
        } catch (ProcessFailedException $exception) {
            $this->error('Database dump failed');
            $this->error($exception->getMessage());
            return 1;
        }
    }
    
    /**
     * Dump PostgreSQL database.
     *
     * @param array $config
     * @param string $filepath
     * @return int
     */
    protected function dumpPostgres(array $config, string $filepath)
    {
        $command = [
            'pg_dump',
            '--dbname=' . $config['database'],
            '--username=' . $config['username'],
            '--host=' . ($config['host'] ?? '127.0.0.1'),
        ];
        
        if (isset($config['port'])) {
            $command[] = '--port=' . $config['port'];
        }
        
        $command[] = '--file=' . $filepath;
        
        $this->info('Creating PostgreSQL dump...');
        
        // For security, don't show the full command with password
        $this->comment('Running: pg_dump for ' . $config['database']);
        
        $process = new Process($command);
        $process->setTimeout(3600); // 1 hour timeout
        
        // Set password as environment variable
        if (isset($config['password']) && !empty($config['password'])) {
            $process->setEnv(['PGPASSWORD' => $config['password']]);
        }
        
        try {
            $process->mustRun();
            $this->info("Database dump created successfully: {$filepath}");
            $this->info("Size: " . round(File::size($filepath) / 1024 / 1024, 2) . " MB");
            return 0;
        } catch (ProcessFailedException $exception) {
            $this->error('Database dump failed');
            $this->error($exception->getMessage());
            return 1;
        }
    }
    
    /**
     * Dump SQLite database.
     *
     * @param array $config
     * @param string $filepath
     * @return int
     */
    protected function dumpSqlite(array $config, string $filepath)
    {
        $database = $config['database'];
        
        if (!File::exists($database)) {
            $this->error("SQLite database file not found: {$database}");
            return 1;
        }
        
        // For SQLite, we can just copy the file
        $this->info('Creating SQLite dump (copying database file)...');
        
        try {
            File::copy($database, $filepath);
            $this->info("Database dump created successfully: {$filepath}");
            $this->info("Size: " . round(File::size($filepath) / 1024 / 1024, 2) . " MB");
            return 0;
        } catch (\Exception $exception) {
            $this->error('Database dump failed');
            $this->error($exception->getMessage());
            return 1;
        }
    }
}
