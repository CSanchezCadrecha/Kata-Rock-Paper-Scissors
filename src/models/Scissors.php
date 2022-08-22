<?php

namespace App\Models;

class Scissors {
    private $type;

    public function __construct()
    {
        $this->type = "Scissors";
    }

    public function getType()
    {
        return $this->type;
    }
}