<?php


namespace App\Library;

use App\Library\DirectAPITheme;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;


class Theme
{
    public static function getTheme($key){
        return env('THEME_VERSION');

    }


}
