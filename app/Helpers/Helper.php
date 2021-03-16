<?php

namespace App\Helpers;

use Illuminate\Http\UploadedFile;

class Helper
{

    /**
     * Uploads The File
     *
     * @param string $dir
     * @param UploadedFile $image
     * @param string $checkFunction
     * @return string
     */
    public static function Upload(string $dir, UploadedFile $image, string $checkFunction = null) : string
    {
        return UploadImages($dir, $image, $checkFunction);
    }

    /**
     * Upload Update
     *
     * @param string $oldFile
     * @param string $dir
     * @param UploadedFile $image
     * @param string $checkFunction
     * @return string
     */
    public static function UploadUpdate(string $oldFile, string $dir, UploadedFile $image, string $checkFunction = null) : string
    {
        if (!empty($oldFile) && !is_null($oldFile) && file_exists(public_path('uploads/' . $oldFile))) {
            @unlink(public_path('uploads/' . $oldFile));
        }
        return UploadImages($dir, $image, $checkFunction);
    }


    /**
     * MultiUpload Images
     * @param  array        $images
     * @param  string       $dir
     * @param  UploadedFile $image
     * @param  string       $checkFunction
     * @return string
     */
    public static function MultiUpload(array $images, string $dir, string $checkFunction = null) : string
    {
        $uploaded_images = [];
        foreach ($images as $image) {
            $uploaded_images[] = static::Upload($dir, $image, $checkFunction);
        }
        return implode('|', $uploaded_images);
    }


    /**
     * MultiUploadUpdate
     * @param  array  $oldImages
     * @param  array  $newImages
     * @param  string $currentImages
     * @param  string $dir
     * @param  string $checkFunction
     * @return string
     */
    public static function MultiUploadUpdate(array $oldImages, array $newImages, string $currentImages, string $dir, string $checkFunction = null) : string
    {
        $currentImages = explode('|', $currentImages);

        $willRemove = array_diff($currentImages, $oldImages);

        foreach ($willRemove as $image) {
            static::unlink($image);
            if (($key = array_search($image, $currentImages))) {
                unset($currentImages[$key]);
            }
        }

        if (count($newImages)) {
            $newImages = static::MultiUpload($newImages, $dir, $checkFunction);
            return implode('|', array_merge(explode('|', $newImages), $currentImages));
        }

        return implode('|', $currentImages);
    }


    /**
     * unlink images
     * @param string $image
     * @return void
     */
    public static function unlink(string $image) : void
    {
        if (file_exists(public_path('uploads/' . $image))) {
            @unlink(public_path('uploads/' . $image));
        }
    }
}
