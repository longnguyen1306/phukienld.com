<?php

namespace App\Http\FunctionsCustom;


use Intervention\Image\Facades\Image;

class Functions {
    public function uploadImage($image, $folder, $w, $h) {

        if (!file_exists(public_path( '/images/'.$folder))) {
            mkdir(public_path( '/images/'.$folder), 666, true);
        }

        $input['imagename'] = 'ld-store-'.time().'-'.$image->getClientOriginalName();
        $filePath = public_path('/images/'.$folder);
        $img = Image::make($image->path());
        $img->resize($w, $h)->save($filePath.'/'.$input['imagename']);
        $imageLink = '/images/'.$folder.'/'.$input['imagename'];

        return $imageLink;
    }
}
