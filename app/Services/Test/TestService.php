<?php

namespace App\Services\Test;

use App\Models\Test;
use Illuminate\Database\Eloquent\ModelNotFoundException;

/**
 *
 */
class TestService implements TestServiceInterface
{
    /**
     * @return void
     */
    public function fill() {
        Test::factory()->create();
    }

    /**
     * @return mixed
     */
    public function get(): mixed
    {
        try {
            $test = Test::whereIn('result', ['normal', 'success'])
                ->getOrFail();
        }
        catch(ModelNotFoundException) {
            abort(403);
        }
        return $test;
    }
}