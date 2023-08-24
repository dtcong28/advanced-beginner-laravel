<?php
use Carbon\Carbon;
use Core\Providers\Facades\Storages\BaseStorage;

if (!function_exists('randomString')) {
    function randomString($length = 10, $isText = true, $isUppercase = true)
    {
        $characters = '0123456789';

        if ($isText) {
            $characters .= 'abcdefghijklmnopqrstuvwxyz';
        }

        if ($isUppercase) {
            $characters .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        }

        $charactersLength = strlen($characters);
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        return $randomString;
    }
}
