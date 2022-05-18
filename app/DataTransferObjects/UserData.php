<?php

namespace App\DataTransferObjects;
use Illuminate\Http\Request;
use App\DataTransferObjects\ObjectData;

final class UserData extends ObjectData
{
    public string $name;
    public string $surname;
    public string $email;
    public string $password;

    /**
     * @throws \Spatie\DataTransferObject\Exceptions\UnknownProperties
     */

    public static function fromRequest(

        Request $request

    ): UserData {

        return new UserData(

            name: $request->get('name'),
            surname: $request->get('surname'),
            email: $request->get('email'),
            password: $request->get('password'),

        );
    }
}