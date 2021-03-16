<?php

use Illuminate\Support\Collection;

/**
 *
 * @param  string $url 'url into admin pages'
 * @return string $url
 */
function aurl(string $url)
{
    return url('/admin' . $url);
}


/**
 * the image dynamic function
 * @param string $dir           'image directory'
 * @param $image
 * @param $checkFunction
 * @return string
 */
function UploadImages(string $dir, $image, $checkFunction = null) : string
{
    $saveImage = '';

    if (! File::exists(public_path('uploads').'/' . $dir)) { // if file or fiolder not exists
        /**
         *
         * @param $PATH Required
         * @param $mode Defualt 0775
         * @param create the directories recursively if doesn't exists
         */
        File::makeDirectory(public_path('uploads') . '/' . $dir, 0775, true); // create the dir or the
    }

    if (File::isFile($image)) {
        $name = $image->getClientOriginalName(); // get image name
        $extension  = $image->getClientOriginalExtension(); // get image extension
        $sha1       = sha1($name); // hash the image name
        $fileName   = rand(1, 1000000) . "_" . date("y-m-d-h-i-s") . "_" . $sha1 . "." . $extension; // create new name for the image

        if (! is_null($checkFunction)) {
            if (!$checkFunction($name)) {
                return false;
            }
        }

        // get the image realpath
        $uploadedImage = Image::make($image->getRealPath());

        $uploadedImage->save(public_path('uploads/' . $dir . '/' . $fileName), '100'); // save the image

        $saveImage = $dir . '/' . $fileName; // get the name of the image and the dir that uploaded in
    }

    return $saveImage;
}

/**
 * Return The Image With Path
 * @param string $image
 * @return string $image
 */
function ShowImage($image) : string
{
    if (! is_null($image) && !empty($image) && File::exists(public_path('uploads').'/' . $image)) {
        return asset('uploads/' . $image);
    }
    return 'http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image';
}

/**
 * userCan description
 * @param  string $permission
 * @return bool
 */
function userCan(string $permission) : bool
{
    if (session()->has('user.permissions')) {
        return in_array($permission, session('user.permissions'));
    } else {
        // get thye user permissions depinding on then roles
        $permissions = auth()->user()->getAllPermissions()->pluck('name')->toArray();
        // save the persdissions to can Chack on the persissions
        session()->put('user.permissions', $permissions);

        return in_array($permission, session('user.permissions'));
    }
}


/**
 * getData
 *
 * gets data from old() and $edit
 */
function getData(Collection $data, $attr)
{
    return $data->has($attr) ? $data[$attr] : null;
}


/**
 * Check values
 *
 * Checks The Empty And Null Vals
 */

 function checkValue($val)
 {
     return !empty($val) && !is_null($val);
 }


 /**
  * panic
  *
  * throws an exception with the specified message
  *
  * @return Exception
  */
 function panic($msg)
 {
     throw new \Exception($msg);
 }
