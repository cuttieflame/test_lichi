<?php

namespace App\Http\Controllers;

use App\Contracts\TestInterface;
use App\Services\Test\TestServiceInterface;

class TestController extends Controller implements TestInterface
{
    private TestServiceInterface $testService;
    public function __construct(TestServiceInterface $testService) {
        $this->testService = $testService;
        $this->testService->fill();
    }
    public function __invoke() {
        return $this->testService->get();
    }

}
