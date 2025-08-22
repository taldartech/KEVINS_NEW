# Performance Optimization Guide

This document outlines the performance optimizations implemented for the site and how to use them.

## Optimization Commands

### Database Dump Command
```bash
php artisan db:dump [--filename=custom_name] [--path=custom/path]
```
- Creates database backups for MySQL, PostgreSQL, or SQLite
- Automatically creates backup directories if they don't exist
- Shows dump file size after creation

### Site Optimization Command
```bash
php artisan site:optimize [--check-unused] [--clean] [--optimize-images]
```
- `--check-unused`: Scans for unused image files without removing them
- `--clean`: Removes or backs up unused files
- `--optimize-images`: Compresses images to reduce file size (requires jpegoptim, optipng, gifsicle, svgo)

### Blade Template Image Optimization
```bash
php artisan blade:optimize-images [--dry-run]
```
- Adds `loading="lazy"` attribute to images in Blade templates
- Converts some images to use data-src for custom lazy loading
- Use `--dry-run` to preview changes without modifying files

### Asset Minification Command
```bash
php artisan assets:minify [--css] [--js] [--all] [--dry-run]
```
- `--css`: Minifies CSS files only
- `--js`: Minifies JavaScript files only
- `--all`: Minifies both CSS and JavaScript files
- `--dry-run`: Shows what would be minified without making changes
- Creates .min.css and .min.js versions of your files

### Laravel Optimization Command
```bash
php artisan laravel:optimize [--production] [--clear]
```
- `--production`: Runs optimizations suitable for production environment
- `--clear`: Clears all caches before optimizing
- Runs all Laravel optimization commands in the correct order
- Includes config:cache, route:cache, view:cache, and more

### Clean Unwanted Files Command
```bash
php artisan files:clean [--check] [--backup] [--temp] [--duplicates] [--symlink] [--old] [--days=30] [--size=10] [--force]
```
- `--check`: Only check for unwanted files without deleting them
- `--backup`: Backup files before deleting them
- `--temp`: Clean temporary files (logs, cache files)
- `--duplicates`: Find and clean duplicate files
- `--symlink`: Create symbolic links for duplicate files instead of deleting them
- `--old`: Clean old backup files and logs older than specified days
- `--days=30`: Number of days to consider files as old
- `--size=10`: Minimum size in MB to report large files
- `--force`: Force deletion without confirmation

### Automated Optimization Script
```bash
./optimize_site.sh
```
- Interactive script that guides you through all optimization steps
- Runs all optimization commands in the correct order
- Allows you to choose which optimizations to perform
- Creates database backups before making significant changes
- Perfect for deployment or periodic maintenance

## Performance Improvements Implemented

### Backend Optimizations
1. **Cache Control Middleware**
   - Adds proper cache headers for static assets (1 year cache)
   - Sets appropriate cache headers for HTML content (1 hour cache)
   - Prevents caching for authenticated users

2. **Performance Service Provider**
   - Forces HTTPS in production
   - Optimizes cache configuration
   - Enables route caching in production

### Frontend Optimizations
1. **JavaScript Optimization**
   - Lazy loading for images
   - Deferred loading of non-critical JavaScript
   - Intersection Observer for animations and viewport-dependent features
   - Preloading of critical resources

2. **Image Optimization**
   - Automatic image compression
   - Lazy loading implementation
   - Placeholder images for below-the-fold content

## How to Use

### For Development
1. Run `php artisan site:optimize --check-unused` to identify unused assets
2. Run `php artisan blade:optimize-images --dry-run` to see what image optimizations would be made

### For Production
1. Run `php artisan config:cache` to cache configuration
2. Run `php artisan route:cache` to cache routes
3. Run `php artisan view:cache` to cache views
4. Run `php artisan site:optimize --optimize-images` to compress images
5. Run `php artisan blade:optimize-images` to implement lazy loading

### Regular Maintenance
1. Run `php artisan db:dump` regularly to back up your database
2. Periodically run `php artisan site:optimize --check-unused` to identify new unused assets

## Required Tools for Image Optimization
Install these tools to enable image optimization:
```bash
brew install jpegoptim optipng gifsicle
npm install -g svgo
```

## Additional Recommendations
1. Consider using a CDN for static assets
2. Enable HTTP/2 on your web server
3. Implement browser caching with .htaccess rules
4. Minify CSS and JavaScript files in production
5. Use WebP images where supported
