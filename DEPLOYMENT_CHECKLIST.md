# Deployment Checklist

Use this checklist to ensure your Laravel application is properly deployed.

## Pre-Deployment

- [ ] Code is tested and working locally
- [ ] All sensitive data moved to `.env` file
- [ ] `.env` file is in `.gitignore`
- [ ] Dependencies are up to date

## Server Setup

- [ ] PHP 8.2+ installed
- [ ] Required PHP extensions installed:
  - [ ] OpenSSL
  - [ ] PDO
  - [ ] Mbstring
  - [ ] Tokenizer
  - [ ] XML
  - [ ] Ctype
  - [ ] JSON
  - [ ] BCMath
  - [ ] Fileinfo
- [ ] Composer installed
- [ ] Database created
- [ ] Web server (Apache/Nginx) configured

## File Upload

- [ ] All files uploaded to server
- [ ] `.env` file created on server (NOT uploaded from local)
- [ ] `.env` configured with production settings
- [ ] `vendor/` folder uploaded (or `composer install` run on server)
- [ ] `node_modules/` NOT uploaded (if exists)

## Configuration

- [ ] `.env` file configured:
  - [ ] `APP_ENV=production`
  - [ ] `APP_DEBUG=false`
  - [ ] `APP_URL` set to your domain (with https://)
  - [ ] Database credentials correct
  - [ ] Mail settings configured (if using)
- [ ] Application key generated: `php artisan key:generate`
- [ ] Web server document root points to project root (where `index.php` is)
- [ ] `.htaccess` file exists in root folder

## Permissions

- [ ] `storage/` folder writable (755 or 775)
- [ ] `bootstrap/cache/` folder writable (755 or 775)
- [ ] Root folder accessible (755)
- [ ] Other folders readable (755)

## Database

- [ ] Database created
- [ ] Migrations run: `php artisan migrate --force`
- [ ] Database connection tested

## Optimization

- [ ] Composer autoloader optimized: `composer install --optimize-autoloader`
- [ ] Configuration cached: `php artisan config:cache`
- [ ] Routes cached: `php artisan route:cache`
- [ ] Views cached: `php artisan view:cache`

## Testing

- [ ] Homepage loads correctly
- [ ] All routes work
- [ ] Images and assets load
- [ ] Contact form works (if applicable)
- [ ] No 500 errors
- [ ] No debug information visible (APP_DEBUG=false)

## Security

- [ ] `.env` file not accessible via web
- [ ] Sensitive files not accessible (composer.json, artisan, etc.)
- [ ] HTTPS configured (if using SSL)
- [ ] `APP_DEBUG=false` in production
- [ ] File permissions not too permissive (no 777)

## Post-Deployment

- [ ] Error logging working (check `storage/logs/laravel.log`)
- [ ] Backup strategy in place
- [ ] Monitoring set up (if applicable)
- [ ] SSL certificate installed (if using HTTPS)
- [ ] Domain DNS configured correctly

## Quick Commands Reference

```bash
# Install dependencies
composer install --optimize-autoloader --no-dev

# Generate key
php artisan key:generate

# Run migrations
php artisan migrate --force

# Optimize
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Set permissions
chmod -R 755 storage bootstrap/cache
```

## Troubleshooting Commands

```bash
# Clear all caches
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan cache:clear

# Check logs
tail -f storage/logs/laravel.log

# Check permissions
ls -la storage/
ls -la bootstrap/cache/
```

