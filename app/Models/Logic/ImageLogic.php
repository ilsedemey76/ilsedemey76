<?php

namespace App\Models\Logic;

use Illuminate\Database\Eloquent\Model;

class ImageLogic extends Model
{
    public static function getFileNameExtra($width, $height, $type='crop')
    {
        if ($type == 'crop') {
            return $width.'_'.$height.'_c';
        } else {
            return $width.'_'.$height.'_r';
        }
    }
}
