<?php

namespace App\Contracts;

use App\Http\Requests\UserRequest;

/**
 *
 */
interface UserInterface
{
    /**
     * @return mixed
     */
    public function index(): mixed;

    /**
     * @param UserRequest $request
     * @return mixed
     */
    public function create(UserRequest $request): mixed;

}