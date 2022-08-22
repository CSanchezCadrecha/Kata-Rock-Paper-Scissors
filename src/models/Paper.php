<?php

namespace App\Models;

class Paper {
    private $type;

    public function __construct()
    {
        $this->type = "Paper";
    }

    public function getType()
    {
        return $this->type;
    }
}