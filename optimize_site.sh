#!/bin/bash

# Site Optimization Script
# This script runs all optimization commands in the correct order

echo "===== KEVIN'S NEW SITE OPTIMIZATION SCRIPT ====="
echo "Starting optimization process..."

# Check if we're in the right directory
if [ ! -f "artisan" ]; then
    echo "Error: This script must be run from the Laravel project root directory."
    exit 1
fi

# Function to run a command and check its status
run_command() {
    echo -e "\n>> Running: $1"
    eval $1
    if [ $? -ne 0 ]; then
        echo "Warning: Command may have encountered issues."
    fi
}

# 1. Clear all Laravel caches first
echo -e "\n===== CLEARING CACHES ====="
run_command "php artisan laravel:optimize --clear"

# 2. Check for unused files
echo -e "\n===== CHECKING FOR UNUSED FILES ====="
run_command "php artisan site:optimize --check-unused"

# 3. Clean unwanted files
echo -e "\n===== CLEANING UNWANTED FILES ====="
echo "Select which types of unwanted files to clean:"
read -p "Clean temporary files? (y/n): " clean_temp
read -p "Find and clean duplicate files? (y/n): " clean_duplicates
if [[ $clean_duplicates == "y" || $clean_duplicates == "Y" ]]; then
    read -p "Create symlinks instead of deleting duplicates? (y/n): " create_symlinks
fi
read -p "Clean old backup and log files? (y/n): " clean_old
read -p "Create backups before deleting? (y/n): " create_backups

clean_command="php artisan files:clean"
if [[ $clean_temp == "y" || $clean_temp == "Y" ]]; then
    clean_command="$clean_command --temp"
fi
if [[ $clean_duplicates == "y" || $clean_duplicates == "Y" ]]; then
    clean_command="$clean_command --duplicates"
    if [[ $create_symlinks == "y" || $create_symlinks == "Y" ]]; then
        clean_command="$clean_command --symlink"
    fi
fi
if [[ $clean_old == "y" || $clean_old == "Y" ]]; then
    clean_command="$clean_command --old"
fi
if [[ $create_backups == "y" || $create_backups == "Y" ]]; then
    clean_command="$clean_command --backup"
fi

if [[ $clean_temp == "y" || $clean_temp == "Y" || $clean_duplicates == "y" || $clean_duplicates == "Y" || $clean_old == "y" || $clean_old == "Y" ]]; then
    run_command "$clean_command"
else
    echo "Skipping unwanted files cleanup."
fi

# 4. Optimize images
echo -e "\n===== OPTIMIZING IMAGES ====="
read -p "Do you want to optimize images? This may take some time. (y/n): " optimize_images
if [[ $optimize_images == "y" || $optimize_images == "Y" ]]; then
    run_command "php artisan site:optimize --optimize-images"
fi

# 4. Add lazy loading to images in Blade templates
echo -e "\n===== OPTIMIZING BLADE TEMPLATES ====="
read -p "Do you want to add lazy loading to images in Blade templates? (y/n): " optimize_blade
if [[ $optimize_blade == "y" || $optimize_blade == "Y" ]]; then
    run_command "php artisan blade:optimize-images"
fi

# 5. Minify assets
echo -e "\n===== MINIFYING ASSETS ====="
read -p "Do you want to minify CSS and JavaScript files? (y/n): " minify_assets
if [[ $minify_assets == "y" || $minify_assets == "Y" ]]; then
    run_command "php artisan assets:minify --all"
fi

# 6. Take a database backup
echo -e "\n===== CREATING DATABASE BACKUP ====="
read -p "Do you want to create a database backup? (y/n): " create_backup
if [[ $create_backup == "y" || $create_backup == "Y" ]]; then
    timestamp=$(date +"%Y%m%d_%H%M%S")
    run_command "php artisan db:dump --filename=pre_optimization_${timestamp}"
fi

# 7. Run Laravel optimizations for production
echo -e "\n===== OPTIMIZING LARAVEL FOR PRODUCTION ====="
read -p "Do you want to run Laravel production optimizations? (y/n): " optimize_laravel
if [[ $optimize_laravel == "y" || $optimize_laravel == "Y" ]]; then
    run_command "php artisan laravel:optimize --production"
fi

echo -e "\n===== OPTIMIZATION COMPLETE ====="
echo "All optimization tasks have been completed."
echo "For more information on the optimizations performed, see PERFORMANCE_OPTIMIZATION.md"
