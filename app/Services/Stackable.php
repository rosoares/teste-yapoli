<?php

namespace App\Services;

use SplStack;

interface Stackable
{
    public function toStack(array $array): SplStack;

    public function toArray($stack): array;

    public function persist($stack): void;
}
