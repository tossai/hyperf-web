<?php

namespace App\JsonRpc;

interface DistributeServiceInterface
{
    public function add(int $a, int $b): int;
}