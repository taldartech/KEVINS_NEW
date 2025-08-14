<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('tour_packages', function (Blueprint $table) {
            $table->softDeletes(); // adds 'deleted_at' nullable timestamp
        });
    }
    
    public function down()
    {
        Schema::table('tour_packages', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
    
};
