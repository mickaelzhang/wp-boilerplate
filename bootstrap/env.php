<?php
// =============================================================================
// Generate Keys
// =============================================================================
$envFile    = __DIR__ . '/../.env';
$envContent = file_get_contents($envFile);
$keys = [
    'AUTH_KEY',
    'SECURE_AUTH_KEY',
    'LOGGED_IN_KEY',
    'NONCE_KEY',
    'AUTH_SALT',
    'SECURE_AUTH_SALT',
    'LOGGED_IN_SALT',
    'NONCE_SALT'
];

foreach ($keys as $key) {
    $envContent = str_replace(
        $key . '=\'yourrandomstring\'',
        $key . '=\'' . randomString() . '\'',
        $envContent
    );
}

file_put_contents($envFile, $envContent);

/**
 * Generate random string of various characters.
 *
 * @param   integer  $length  Length of string
 * @return  string
 */
function randomString($length = 64)
{
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_[]{}<>~`+=,.;:/?|';
    $size = strlen($chars);
    $str = '';
    for ($i = 0; $i < $length; $i++) {
        $str .= $chars[rand(0, $size - 1)];
    }
    return $str;
}
