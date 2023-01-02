<?php

namespace Skeleton\Generate;

use Skeleton\Skeleton;

class Generate implements GenerateInterface
{
    private Skeleton $skeleton;

    private function __construct(Skeleton $skeleton)
    {
        $this->skeleton = $skeleton;
    }

    public static function with(Skeleton $skeleton): Generate
    {
        return new self($skeleton);
    }

    public function assertIsTrue(): bool
    {
        return true;
    }
}
