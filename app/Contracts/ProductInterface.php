<?php

namespace App\Contracts;

use Illuminate\Http\Request;

/**
 *
 */
interface ProductInterface
{
    /**
     * @return mixed
     */
    public function index(): mixed;

    /**
     * @param Request $request
     * @return mixed
     */
    public function products(Request $request): mixed;
    public function test();
}