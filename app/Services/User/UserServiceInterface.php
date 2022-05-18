<?php

namespace App\Services\User;

/**
 *
 */
interface UserServiceInterface
{
    /**
     * @param array $validatedData
     * @return mixed
     */
    public function makeUserArrayForTextUpload(array $validatedData): mixed;

    /**
     * @param string $path
     * @param $data
     * @return mixed
     */
    public function storageTxtUploadUserInformation(string $path, $data): mixed;
}