<?php

namespace App\Services;

use App\Models\Enums\PathFileEnum;
use App\Models\File as ModelsFile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class FileUploadService
{

    /*
    * @var $file : file to upload
    * @var $object : instance eloquent object to attache file
    * @var $filePath : path to save file
    */
    public static function upload(UploadedFile $file, Model $object,  PathFileEnum $filePath = PathFileEnum::DEFAULT_PATH)
    {
        $path = Storage::putFile('public/' . $filePath->value, $file);
        if (!$path) {
            return;
        }
        $file = new ModelsFile();
        $file->path = $path;
        $file->target_id = $object->id;
        $file->target_type = get_class($object);
        $file->type = $filePath->value;
        $file->save();
    }

    public static function uploadMultipleFiles(array $files, Model $object,  PathFileEnum $filePath = PathFileEnum::DEFAULT_PATH)
    {
        foreach ($files as $file) {
            FileUploadService::upload($file, $object, $filePath);
        }
    }

    public static function uploadPath(UploadedFile $file,  PathFileEnum $filePath = PathFileEnum::DEFAULT_PATH)
    {
        return Storage::putFile('public/' . $filePath->value, $file);
    }
}
