<?php

/**
 * Gets the value of an environment variable.
 * Supports boolean, empty and null.
 *
 * @param   string  $key
 * @param   mixed   $default
 * @return  mixed
 */
function env($key, $default = null)
{
    $value = getenv($key);
    if ($value === false) {
        return $default;
    }
    switch (strtolower($value)) {
        case 'true':
        case '(true)':
            return true;
        case 'false':
        case '(false)':
            return false;
        case 'empty':
        case '(empty)':
            return '';
        case 'null':
        case '(null)':
            return;
    }

    return $value;
}
