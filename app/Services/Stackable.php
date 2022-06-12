<?php

namespace App\Services;

interface Stackable
{
    public function toStack(array $array);

    public function toArray($stack);

    public function persist($stack);
}
