<?php

namespace App\Http\Controllers;

use App\Contracts\TestInterface;
use App\Services\Test\TestServiceInterface;

/**
 *
 */
class TestController extends Controller implements TestInterface
{
    /**
     * @var TestServiceInterface
     */
    private TestServiceInterface $testService;

    /**
     * @param TestServiceInterface $testService
     */
    public function __construct(TestServiceInterface $testService) {
        $this->testService = $testService;
        $this->testService->fill();
    }

    /**
     * @return mixed
     */
    public function __invoke(): mixed
    {
        return $this->testService->get();
    }

}
