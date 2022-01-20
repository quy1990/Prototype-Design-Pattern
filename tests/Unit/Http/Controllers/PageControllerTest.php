<?php

namespace Http\Controllers;

use App\Http\Controllers\ComputerController;
use App\Http\Controllers\PageController;
use PHPUnit\Framework\TestCase;

class PageControllerTest extends TestCase
{

    public function testIndex()
    {
        /** @var ComputerController $c */
        $c = app(PageController::class);
        $c->index();


        $this->assertTrue(true);
    }
}
