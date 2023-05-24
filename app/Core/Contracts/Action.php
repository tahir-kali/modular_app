<?php

namespace App\Core\Contracts;

interface Action
{
    public function execute(...$params);
}
