<?php

namespace App\Http\Services\Computers;

interface Cloneable
{
    public function clone(): Cloneable;
}
