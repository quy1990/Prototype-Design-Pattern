<?php

namespace App\Http\Controllers;

use App\Http\Services\Computers\ComputerCloneable;

class ComputerController extends Controller
{
    public function index()
    {
        $computer1 = new ComputerCloneable('windows', 'office 365');
        $computer2 = $computer1;
        $computer2->setOthers('other');
        $computer2->setOthers('others');
        $computer1->toString();
        $computer2->toString();

    }
}
