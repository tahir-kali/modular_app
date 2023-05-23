<?php

namespace App\Core\Core\Contracts;

interface Action
{
    public function execute(...$params);
}
