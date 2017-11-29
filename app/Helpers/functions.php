<?php

/**
 * generateRandomString
 */
if( ! function_exists('generateRandomString')) {
    function generateRandomString($length = 25)
    {
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        return substr(str_shuffle(str_repeat($pool, $length)), 0, $length);
    }
}