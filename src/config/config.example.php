<?php
/**
 * Configuration file for mi_empresa
 * Copy this file to config.php and update the values for your environment
 */

// Database configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'mi_empresa');
define('DB_USER', 'root');
define('DB_PASS', '');

// API settings
define('API_KEY', 'your-api-key-here');
define('CORS_ALLOW_ORIGIN', '*');

// File upload settings
define('UPLOAD_DIR', '../uploads/');
define('MAX_FILE_SIZE', 5242880); // 5MB

// Security settings
define('PASSWORD_MIN_LENGTH', 6);
define('SESSION_TIMEOUT', 3600); // 1 hour

// Application settings
define('APP_NAME', 'Mi Empresa');
define('APP_VERSION', '1.0.0');
define('DEBUG_MODE', true);

// Email settings (for future use)
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_PORT', 587);
define('SMTP_USER', 'your-email@example.com');
define('SMTP_PASS', 'your-email-password');

?>