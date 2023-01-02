<?php

namespace Skeleton\Generate;

use Skeleton\Skeleton;

interface GenerateInterface
{
    public static function with(Skeleton $skeleton): Generate;

    public function assertIsTrue(): bool;
}
