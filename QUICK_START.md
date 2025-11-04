# Quick Start - Deploy to Hosting

## 🎯 Quick Deployment Steps

### For Apache/Shared Hosting (Most Common)

1. **Upload all files** to your hosting (except `.env` and `node_modules/`)

2. **Point document root to project root folder**
   - In cPanel: Change document root to `public_html/your-project` (where `index.php` is located)
   - The `.htaccess` file is already in the root folder

3. **Create `.env` file** on server with production settings:
   ```env
   APP_ENV=production
   APP_DEBUG=false
   APP_URL=https://yourdomain.com
   DB_CONNECTION=mysql
   DB_HOST=localhost
   DB_DATABASE=your_database
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

4. **Run these commands** (via SSH or hosting panel):
   ```bash
   composer install --optimize-autoloader --no-dev
   php artisan key:generate
   php artisan migrate --force
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   chmod -R 755 storage bootstrap/cache
   ```

5. **Test your website** - Visit your domain

## 📁 File Structure on Server

```
your-hosting-root/
├── app/
├── bootstrap/
├── config/
├── database/
├── index.php       ← Web server entry point (in root)
├── .htaccess       ← Already exists, handles routing (in root)
├── website/        ← Public assets (in root)
├── resources/
├── routes/
├── storage/
├── vendor/
├── .env            ← Create this on server
├── artisan
└── composer.json
```

## ⚡ One-Line Commands

**If you have SSH access:**
```bash
bash deploy.sh
```

**Or manually:**
```bash
composer install --optimize-autoloader --no-dev && php artisan key:generate && php artisan migrate --force && php artisan config:cache && php artisan route:cache && php artisan view:cache && chmod -R 755 storage bootstrap/cache
```

## 🔧 Common Issues

**500 Error?**
- Check file permissions: `chmod -R 755 storage bootstrap/cache`
- Check `.env` file exists and has correct values
- Check error log: `storage/logs/laravel.log`

**Styles/Images not loading?**
- Verify document root points to project root (where `index.php` is)
- Clear cache: `php artisan view:clear`
- Check asset paths in views reference `/website/` correctly

**Routes not working?**
- Clear route cache: `php artisan route:clear`
- Check `.htaccess` exists in root folder
- Verify mod_rewrite is enabled (Apache)

## 📞 Need Help?

See `DEPLOYMENT_GUIDE.md` for detailed instructions.

