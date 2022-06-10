<?php

namespace App\Http\FunctionsCustom;


use Intervention\Image\Facades\Image;

class Functions {
    public function uploadImage($image, $folder, $w, $h) {
        $input['imagename'] = 'ld-store-'.time().'.'.$image->extension();
        $filePath = public_path('/images/'.$folder);
        $img = Image::make($image->path());
        $img->resize($w, $h)->save($filePath.'/'.$input['imagename']);
        $imageLink = '/images/category/'.$input['imagename'];

        return $imageLink;
    }
}
