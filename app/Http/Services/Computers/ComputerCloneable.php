<?php

namespace App\Http\Services\Computers;

use Nette\NotSupportedException;

class ComputerCloneable implements Cloneable
{
    private $os;
    private $office;
    private $antivirus;
    private $browser;
    private $others;

    public function __construct(string $os, string $office)
    {
        $this->os = $os;
        $this->office = $office;
    }

    public function clone(): Cloneable
    {
        try {
            return $this;
        } catch (NotSupportedException $e) {
            throw new NotSupportedException('not supported');
        }
    }

    public function setOthers(string $others): void
    {
        $this->others = $others;
    }

    public function toString(): void
    {
        echo PHP_EOL . ' : ' . $this->os . ":" . $this->office . ':' . $this->others;
    }
}
