<?php

declare(strict_types=1);

use Skeleton\Skeleton;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 */
final class SkeletonTest extends TestCase
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
    public function testStyles()
    {
        $origin = $result = $this->skeleton->getStyles();

        $this->assertIsArray($result);

        $values = ['http://example.com/css/app.css'];

        $this->skeleton->setStyles($values);

        $this->assertSame($values, $this->skeleton->getStyles());

        $this->skeleton->setStyles($origin);

        $this->skeleton->mergeStyles($values);

        $this->assertSame(array_merge($origin, $values), $this->skeleton->getStyles());
    }

    /**
     * @return void
     */
    public function testScripts()
    {
        $origin = $result = $this->skeleton->getScripts();

        $this->assertIsArray($result);

        $values = ['http://example.com/js/app.js'];

        $this->skeleton->setScripts($values);

        $this->assertSame($values, $this->skeleton->getScripts());

        $this->skeleton->setScripts($origin);

        $this->skeleton->mergeScripts($values);

        $this->assertSame(array_merge($origin, $values), $this->skeleton->getScripts());
    }

    /**
     * @return void
     */
    public function testJquery()
    {
        $origin = $result = $this->skeleton->getJquery();

        $this->assertIsString($result);

        $this->skeleton->setJquery('http://example.com/js/jquery.js');

        $this->assertNotSame($origin, $this->skeleton->getJquery());
    }

    /**
     * @return void
     */
    public function testAttributes()
    {
        $origin = $result = $this->skeleton->getAttributes();

        $this->assertIsArray($result);

        $this->assertEmpty($result);

        $values = ['class' => 'test-class'];

        $this->skeleton->setAttributes($values);

        $this->assertSame($values, $this->skeleton->getAttributes());

        $this->skeleton->setAttributes($origin);

        $this->skeleton->mergeAttributes($values);

        $this->assertSame(array_merge($origin, $values), $this->skeleton->getAttributes());
    }

    /**
     * @return void
     */
    public function testCookieBanner()
    {
        $result = $this->skeleton->getCookieBanner();

        $this->assertNull($result);

        $this->skeleton->setCookieBanner('http://example.com/js/cookie.js');

        $this->assertIsString($this->skeleton->getCookieBanner());
    }

    /**
     * @return void
     */
    public function testDoctype()
    {
        $result = $this->skeleton->getDoctype();

        $this->assertIsString($result);

        $this->assertNotEmpty($result);

        $doctype = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">';

        $this->skeleton->setDoctype($doctype);

        $this->assertEquals($doctype, $this->skeleton->getDoctype());
    }

    /**
     * @return void
     */
    public function testCharset()
    {
        $result = $this->skeleton->getCharset();

        $this->assertIsString($result);

        $this->assertNotEmpty($result);

        $utf = 'UTF-8';

        $this->skeleton->setCharset();

        $this->assertSame($utf, $this->skeleton->getCharset());
    }

    /**
     * @return void
     */
    public function testLanguage()
    {
        $result = $this->skeleton->getLanguage();

        $this->assertIsString($result);

        $this->assertNotEmpty($result);

        $this->assertEquals('en', $result);

        $lang = 'id';

        $this->skeleton->setLanguage($lang);

        $this->assertSame($lang, $this->skeleton->getLanguage());
    }

    /**
     * @return void
     */
    public function testTitle()
    {
        $result = $this->skeleton->getTitle();

        $this->assertIsString($result);

        $this->assertNotEmpty($result);

        $title = 'Hello World!';

        $this->skeleton->setTitle($title);

        $this->assertSame($title, $this->skeleton->getTitle());
    }

    /**
     * @return void
     */
    public function testFavicon()
    {
        $result = $this->skeleton->getFavicon();

        $this->assertIsString($result);

        $this->assertNotEmpty($result);

        $title = '/another/favicon.ico';

        $this->skeleton->setFavicon($title);

        $this->assertSame($title, $this->skeleton->getFavicon());
    }
}
