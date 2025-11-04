# Laravel Deployment Guide for Shared Hosting

This guide will help you deploy your Laravel application to hosting without using `php artisan serve`.

## 📋 Prerequisites

- PHP 8.2 or higher
- Composer installed
- MySQL/MariaDB database (or SQLite)
- Apache or Nginx web server
- SSH access to your hosting (recommended)

## 🚀 Step-by-Step Deployment

### Step 1: Prepare Your Application

1. **Optimize for Production**
   ```bash
   composer install --optimize-autoloader --no-dev
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

2. **Set Environment Variables**
   - Copy `.env.example` to `.env` on your server
   - Update `.env` with production settings:
     ```env
     APP_ENV=production
     APP_DEBUG=false
     APP_URL=https://yourdomain.com
     
     DB_CONNECTION=mysql
     DB_HOST=your_db_host
     DB_DATABASE=your_database
     DB_USERNAME=your_username
     DB_PASSWORD=your_password
     ```

3. **Generate Application Key**
   ```bash
   php artisan key:generate
   ```

### Step 2: Upload Files to Server

**Important:** Upload all files EXCEPT:
- `.env` (create this on server)
- `node_modules/` (if exists)
- `.git/`

**Upload Structure:**
```
your-hosting-root/
├── app/
├── bootstrap/
├── config/
├── database/
├── index.php       ← This is your document root entry point
├── .htaccess       ← Web server configuration (in root)
├── website/        ← Public assets (in root)
├── resources/
├── routes/
├── storage/
├── vendor/
├── .env
├── artisan
├── composer.json
└── composer.lock
```

### Step 3: Configure Web Server

#### Option A: Apache (Most Shared Hosting)

1. **Point Document Root to project root folder**
   - In cPanel: Change document root to `public_html/your-project` (where `index.php` is located)
   - The `.htaccess` file is already in the root folder

2. **Set File Permissions**
   ```bash
   chmod -R 755 storage bootstrap/cache
   chmod -R 755 website
   ```

3. **Create or Update `.htaccess` in root** (if needed)
   See `apache-root-htaccess.txt` file

#### Option B: Nginx

See `nginx-config.conf` file for Nginx configuration

### Step 4: Database Setup

1. **Create database** on your hosting
2. **Run migrations**
   ```bash
   php artisan migrate --force
   ```

### Step 5: Final Steps

1. **Set proper permissions**
   ```bash
   chmod -R 755 storage bootstrap/cache
   ```

2. **Clear and cache config**
   ```bash
   php artisan config:clear
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

3. **Test your application**
   - Visit your domain
   - Check all routes work correctly

## 🔧 Common Hosting Configurations

### cPanel Hosting

1. Upload files to `public_html/your-project/`
2. In cPanel, set document root to `public_html/your-project/public`
3. Or use subdomain: `subdomain.yourdomain.com` → point to `public_html/your-project/public`

### Shared Hosting (No SSH)

1. Use FTP to upload files
2. Create `.env` file via file manager
3. Run composer via hosting panel's Composer tool
4. Set permissions via file manager (755 for folders, 644 for files)

### VPS/Dedicated Server

Follow the full guide above and use SSH for all commands.

## ⚠️ Important Notes

1. **Never commit `.env` file** - It contains sensitive information
2. **Set `APP_DEBUG=false`** in production
3. **Use HTTPS** - Update `APP_URL` to use `https://`
4. **Set proper file permissions** - Don't use 777
5. **Keep `storage/` and `bootstrap/cache/` writable**

## 🐛 Troubleshooting

### 500 Internal Server Error
- Check file permissions (`storage/`, `bootstrap/cache/`)
- Check `.env` file exists and has correct values
- Check error logs in `storage/logs/laravel.log`

### Styles/Images Not Loading
- Clear view cache: `php artisan view:clear`
- Check asset paths in views reference `/website/` correctly
- Verify document root points to project root (where `index.php` is)

### Database Connection Error
- Verify database credentials in `.env`
- Check database exists
- Test connection via hosting panel

### Route Not Found
- Clear route cache: `php artisan route:clear`
- Check `.htaccess` file exists in root folder
- Verify mod_rewrite is enabled (Apache)

## 📝 Post-Deployment Checklist

- [ ] `.env` file configured with production settings
- [ ] `APP_DEBUG=false`
- [ ] `APP_URL` set to your domain
- [ ] Database credentials correct
- [ ] File permissions set correctly
- [ ] Document root points to project root (where `index.php` is)
- [ ] All routes working
- [ ] Images and assets loading
- [ ] Contact form working (if applicable)
- [ ] HTTPS configured (if using SSL)

