<?php

namespace Skeleton\Traits\Method;

trait SkeletonMethod
{
    protected function array(...$values): array
    {
        return is_array($values) ? $values : [$values];
    }

    protected function merge(string $key, array $values): void
    {
        $this->{$key} = array_merge($this->$key, $values);
    }
}
