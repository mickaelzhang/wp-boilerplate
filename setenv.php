<?php


$srcfile = __DIR__ . '\bootstrap\.env.example';
$dstfile = __DIR__ . '\.env';
$path = __DIR__ . '\core\wp-content';

// check accidential empty, root or relative pathes
if (!empty($path)) {
    if (PHP_OS === 'WINNT') {

        copy($srcfile, $dstfile);


    } else {
        exec("cp bootstrap/.env.example .env");
    }
} else {
    error_log('path not valid:$path' . var_export($path, true));
}

