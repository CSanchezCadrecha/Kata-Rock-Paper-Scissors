<?php

namespace App\Models;

class Rock {
    private $type;

    public function __construct()
    {
        $this->type = "Rock";
    }

    public function getType()
    {
        return $this->type;
    }
}