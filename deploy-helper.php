<?php
/**
 * Laravel Deployment Helper
 * 
 * This file helps you verify your Laravel deployment without SSH access.
 * Access it via: https://yourdomain.com/deploy-helper.php
 * 
 * IMPORTANT: Delete this file after deployment for security!
 */

// Security check - only allow access if APP_DEBUG is true or with a secret token
$secretToken = 'CHANGE_THIS_SECRET_TOKEN_BEFORE_USE';
$token = $_GET['token'] ?? '';

if ($token !== $secretToken && (getenv('APP_DEBUG') !== 'true')) {
    http_response_code(403);
    die('Access Denied');
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Laravel Deployment Helper</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 50px auto; padding: 20px; }
        .success { color: green; }
        .error { color: red; }
        .warning { color: orange; }
        .info { color: blue; }
        pre { background: #f5f5f5; padding: 10px; border-radius: 5px; overflow-x: auto; }
        .check-item { margin: 10px 0; padding: 10px; border-left: 3px solid #ddd; }
        .check-item.success { border-left-color: green; background: #f0fff0; }
        .check-item.error { border-left-color: red; background: #fff0f0; }
        .check-item.warning { border-left-color: orange; background: #fff8f0; }
    </style>
</head>
<body>
    <h1>🚀 Laravel Deployment Helper</h1>
    <p><strong>⚠️ IMPORTANT:</strong> Delete this file after deployment for security!</p>
    
    <h2>System Checks</h2>
    
    <?php
    $checks = [];
    
    // Check PHP version
    $phpVersion = PHP_VERSION;
    $minVersion = '8.2.0';
    $phpOk = version_compare($phpVersion, $minVersion, '>=');
    $checks[] = [
        'name' => 'PHP Version',
        'status' => $phpOk ? 'success' : 'error',
        'message' => "PHP $phpVersion " . ($phpOk ? "(>= $minVersion ✓)" : "(< $minVersion ✗)")
    ];
    
    // Check required extensions
    $requiredExtensions = ['openssl', 'pdo', 'mbstring', 'tokenizer', 'xml', 'ctype', 'json', 'bcmath', 'fileinfo'];
    $missingExtensions = [];
    foreach ($requiredExtensions as $ext) {
        if (!extension_loaded($ext)) {
            $missingExtensions[] = $ext;
        }
    }
    $checks[] = [
        'name' => 'PHP Extensions',
        'status' => empty($missingExtensions) ? 'success' : 'error',
        'message' => empty($missingExtensions) ? 'All required extensions installed' : 'Missing: ' . implode(', ', $missingExtensions)
    ];
    
    // Check .env file
    $envExists = file_exists(__DIR__ . '/../.env');
    $checks[] = [
        'name' => '.env File',
        'status' => $envExists ? 'success' : 'error',
        'message' => $envExists ? '.env file exists' : '.env file not found'
    ];
    
    // Check storage writable
    $storageWritable = is_writable(__DIR__ . '/../storage');
    $checks[] = [
        'name' => 'Storage Writable',
        'status' => $storageWritable ? 'success' : 'error',
        'message' => $storageWritable ? 'storage/ folder is writable' : 'storage/ folder is NOT writable'
    ];
    
    // Check bootstrap/cache writable
    $bootstrapWritable = is_writable(__DIR__ . '/../bootstrap/cache');
    $checks[] = [
        'name' => 'Bootstrap Cache Writable',
        'status' => $bootstrapWritable ? 'success' : 'error',
        'message' => $bootstrapWritable ? 'bootstrap/cache/ folder is writable' : 'bootstrap/cache/ folder is NOT writable'
    ];
    
    // Check vendor folder
    $vendorExists = file_exists(__DIR__ . '/../vendor/autoload.php');
    $checks[] = [
        'name' => 'Vendor Folder',
        'status' => $vendorExists ? 'success' : 'warning',
        'message' => $vendorExists ? 'vendor/ folder exists' : 'vendor/ folder not found - run composer install'
    ];
    
    // Check public/index.php
    $indexExists = file_exists(__DIR__ . '/index.php');
    $checks[] = [
        'name' => 'Public Index File',
        'status' => $indexExists ? 'success' : 'error',
        'message' => $indexExists ? 'public/index.php exists' : 'public/index.php not found'
    ];
    
    // Check .htaccess in public
    $htaccessExists = file_exists(__DIR__ . '/.htaccess');
    $checks[] = [
        'name' => 'Public .htaccess',
        'status' => $htaccessExists ? 'success' : 'warning',
        'message' => $htaccessExists ? '.htaccess file exists in public/' : '.htaccess file missing in public/'
    ];
    
    // Display checks
    foreach ($checks as $check) {
        echo '<div class="check-item ' . $check['status'] . '">';
        echo '<strong>' . $check['name'] . ':</strong> ';
        echo '<span class="' . $check['status'] . '">' . $check['message'] . '</span>';
        echo '</div>';
    }
    
    // Count results
    $successCount = count(array_filter($checks, fn($c) => $c['status'] === 'success'));
    $totalCount = count($checks);
    ?>
    
    <h2>Summary</h2>
    <p><strong><?php echo $successCount; ?>/<?php echo $totalCount; ?></strong> checks passed</p>
    
    <?php if ($successCount === $totalCount): ?>
        <p class="success">✅ All checks passed! Your deployment looks good.</p>
    <?php else: ?>
        <p class="error">❌ Some checks failed. Please fix the issues above.</p>
    <?php endif; ?>
    
    <h2>Next Steps</h2>
    <ol>
        <li>Fix any errors shown above</li>
        <li>Run: <code>composer install --optimize-autoloader --no-dev</code></li>
        <li>Run: <code>php artisan key:generate</code></li>
        <li>Run: <code>php artisan migrate --force</code></li>
        <li>Run: <code>php artisan config:cache</code></li>
        <li>Run: <code>php artisan route:cache</code></li>
        <li>Run: <code>php artisan view:cache</code></li>
        <li><strong>Delete this file (deploy-helper.php) for security!</strong></li>
    </ol>
    
    <h2>Environment Info</h2>
    <pre>
PHP Version: <?php echo PHP_VERSION; ?>
Server: <?php echo $_SERVER['SERVER_SOFTWARE'] ?? 'Unknown'; ?>
Document Root: <?php echo $_SERVER['DOCUMENT_ROOT'] ?? 'Unknown'; ?>
Script Path: <?php echo __DIR__; ?>
    </pre>
    
    <p style="margin-top: 30px; color: #666;">
        <small>Generated: <?php echo date('Y-m-d H:i:s'); ?></small>
    </p>
</body>
</html>

