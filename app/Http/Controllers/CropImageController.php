<?php

namespace App\Http\Controllers;

use Intervention\Image\ImageManagerStatic as Image;

class CropImageController extends Controller
{
    public function crop($image, $width, $height)
    {
        $img = Image::make(public_path('images/' . $image))->fit($width, $height, function ($constraint){
            $constraint->upsize();
        });

        return $img->response();
    }
}
