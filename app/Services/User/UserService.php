<?php

namespace App\Services\User;

use Illuminate\Support\Facades\Storage;
use JetBrains\PhpStorm\ArrayShape;

/**
 *
 */
class UserService implements UserServiceInterface
{
    /**
     * @param array $validatedData
     * @return array
     */
    #[ArrayShape(["name" => "", "password" => "", "email" => ""])] public function makeUserArrayForTextUpload(array $validatedData): array
    {
        return ["name" => $validatedData->name, "password" => $validatedData->surname,"email" => $validatedData->email];
    }

    /**
     * @param string $path
     * @param $data
     * @return void
     */
    public function storageTxtUploadUserInformation(string $path, $data) {
        Storage::put($path,$data);
    }

}