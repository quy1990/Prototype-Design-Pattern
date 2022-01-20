<?php

namespace Http\Controllers;

use App\Http\Controllers\ComputerController;
use PHPUnit\Framework\TestCase;

class ComputerControllerTest extends TestCase
{

    public function testIndex()
    {
        /** @var ComputerController $c */
        $c = app(ComputerController::class);
        $c->index();


        $this->assertTrue(true);
    }
}
