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

        if ($this->skeleton->getStatusPreloadIsEnabled()) {
            $str .= '<style type="text/css"> .preloader {position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: 9999; background-color: #fff; } .loading {position: absolute; left: 50%; top: 50%; transform: translate(-50%,-50%); font: 14px arial; } </style>';
        }

        $attributes = '';

        foreach ($this->skeleton->getAttributes() as $key => $value) {
            $attributes .= " {$key}=\"{$value}\" ";
        }

        $str .= '<title>' . $this->skeleton->getTitle() . '</title></head><body' . $attributes . '>';

        if ($this->skeleton->getStatusPreloadIsEnabled()) {
            $str .= '<div class="preloader"><div class="loading"><img src="https://cdn.jsdelivr.net/gh/mjamilasfihani/ui/astoart.com/img/loading.gif" width="86"><p style="font-size: 1.0rem">Please Wait</p></div></div>';
        }

        return $str;
    }

    public function footer(): string
    {
        $str = '';

        $cookieBanner = $this->skeleton->getCookieBanner();

        foreach ($this->skeleton->getScripts() as $script) {
            $str .= '<script type="text/javascript" src="' . $script . '"></script>';
        }

        if (null !== $cookieBanner) {
            $str .= '<script type="text/javascript" src="' . $cookieBanner . '"></script>';
        }

        if ($this->skeleton->getStatusPreloadIsEnabled()) {
            $str .= '<script type="text/javascript">$(document).ready(function(){$(".preloader").fadeOut(); })</script>';
        }

        $str .= '</body></html>';

        return $str;
    }

    public function render(string $view): string
    {
        return "{$this->header()}{$view}{$this->footer()}";
    }
}
