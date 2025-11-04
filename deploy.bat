@echo off
REM Laravel Deployment Script for Windows
REM Run this script on your server after uploading files
REM Usage: deploy.bat

echo.
echo ========================================
echo Laravel Deployment Script
echo ========================================
echo.

REM Check if .env exists
if not exist .env (
    echo [ERROR] .env file not found!
    echo Please create .env file from .env.example and configure it.
    pause
    exit /b 1
)

echo [OK] .env file found
echo.

REM Install dependencies (production)
echo [1/7] Installing Composer dependencies...
call composer install --optimize-autoloader --no-dev --no-interaction
if errorlevel 1 (
    echo [ERROR] Composer install failed!
    pause
    exit /b 1
)
echo.

REM Generate application key if not set
echo [2/7] Checking application key...
call php artisan key:generate --force
echo.

REM Clear and cache configuration
echo [3/7] Optimizing configuration...
call php artisan config:clear
call php artisan config:cache
call php artisan route:cache
call php artisan view:cache
echo.

REM Run migrations
echo [4/7] Running database migrations...
call php artisan migrate --force
echo.

REM Clear old caches
echo [5/7] Clearing old caches...
call php artisan cache:clear
call php artisan view:clear
echo.

REM Note about permissions (Windows doesn't need chmod)
echo [6/7] File permissions...
echo Note: On Windows hosting, ensure folders are writable via hosting panel.
echo.

echo [7/7] Deployment completed!
echo.
echo ========================================
echo Next steps:
echo ========================================
echo 1. Verify .env file has correct production settings
echo 2. Check that APP_DEBUG=false
echo 3. Test your website
echo 4. Configure SSL if needed
echo.
pause

