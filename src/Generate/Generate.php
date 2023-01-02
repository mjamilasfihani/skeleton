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

    public function header(): string
    {
        $str = $this->skeleton->getDoctype() . '<html lang="' . $this->skeleton->getLanguage() . '"><head><meta charset="' . $this->skeleton->getCharset() . '">';

        // meta

        // favicon

        foreach ($this->skeleton->getStyles() as $style) {
            $str .= '<link rel="stylesheet" type="text/css" href="' . $style . '">';
        }

        $str .= '<script type="text/javascript" src="' . $this->skeleton->getJquery() . '"></script>';

        foreach ($this->skeleton->getScripts() as $script) {
            $str .= '<script type="text/javascript" src="' . $script . '"></script>';
        }

        $attributes = '';

        foreach ($this->skeleton->getAttributes() as $key => $value) {
            $attributes .= " {$key}=\"{$value}\" ";
        }

        $str .= '<title>' . $this->skeleton->getTitle() . '</title></head><body' . $attributes . '>';

        return $str;
    }

    public function footer(): string
    {
        $str = '';

        $cookieBanner = $this->skeleton->getCookieBanner();

        if (null !== $cookieBanner) {
            $str .= '<script type="text/javascript" src="' . $cookieBanner . '"></script>';
        }

        $str .= '</body></html>';

        return $str;
    }

    public function render(string $view): string
    {
        return "{$this->header()}{$view}{$this->footer()}";
    }
}
