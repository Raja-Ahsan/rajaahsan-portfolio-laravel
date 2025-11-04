#!/bin/bash

# Laravel Deployment Script
# Run this script on your server after uploading files
# Usage: bash deploy.sh

echo "🚀 Starting Laravel Deployment..."

# Check if .env exists
if [ ! -f .env ]; then
    echo "❌ Error: .env file not found!"
    echo "Please create .env file from .env.example and configure it."
    exit 1
fi

echo "✅ .env file found"

# Install dependencies (production)
echo "📦 Installing Composer dependencies..."
composer install --optimize-autoloader --no-dev --no-interaction

# Generate application key if not set
echo "🔑 Checking application key..."
php artisan key:generate --force

# Clear and cache configuration
echo "⚙️  Optimizing configuration..."
php artisan config:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Run migrations
echo "🗄️  Running database migrations..."
php artisan migrate --force

# Set permissions
echo "🔐 Setting file permissions..."
chmod -R 755 storage bootstrap/cache
chmod -R 755 public

# Clear old caches
echo "🧹 Clearing old caches..."
php artisan cache:clear
php artisan view:clear

echo "✅ Deployment completed successfully!"
echo ""
echo "📝 Next steps:"
echo "1. Verify .env file has correct production settings"
echo "2. Check that APP_DEBUG=false"
echo "3. Test your website"
echo "4. Configure SSL if needed"

