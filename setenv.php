<?php


$srcfile = __DIR__ . '\bootstrap\.env.example';
$dstfile = __DIR__ . '\.env';
$path = __DIR__ . '\core\wp-content';

// check accidential empty, root or relative pathes
if (!empty($path)) {
    if (PHP_OS === 'WINNT') {

        copy($srcfile, $dstfile);
        exec('rd /s /q "' . $path . '"');
        exec("php bootstrap/env.php");


    } else {
        exec("cp bootstrap/.env.example .env");
        exec("php bootstrap/env.php");
        exec("rm -r core/wp-content ||:");
    }
} else {
    error_log('path not valid:$path' . var_export($path, true));
}

