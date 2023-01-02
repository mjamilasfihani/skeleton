<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Skeleton\Generate\Generate;
use Skeleton\Skeleton;

/**
 * @internal
 */
class GenerateTest extends TestCase
{
    /**
     * Instance of Skeleton class.
     */
    private Skeleton $skeleton;

    /**
     * Constructor
     */
    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        // Do Not Edit This Line!!!
        parent::__construct($name, $data, $dataName);

        $this->skeleton = new Skeleton();
    }

    /**
     * @return void
     */
    public function testGenerate()
    {
        $result = Generate::with($this->skeleton);

        $this->assertIsObject($result);
        $this->assertTrue($result->assertIsTrue());
    }
}
