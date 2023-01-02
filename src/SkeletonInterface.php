<?php

namespace Skeleton;

interface SkeletonInterface
{
    /**
     * Get value from `$styles` var.
     */
    public function getStyles(): array;

    /**
     * Set `$styles` with the new one (replacing).
     *
     * @return $this
     */
    public function setStyles(array $styles);

    /**
     * Merge new styles into `$styles` without loosing the old.
     *
     * @return $this
     */
    public function mergeStyles(array $styles);

    /**
     * Get value from `$scripts` var.
     */
    public function getScripts(): array;

    /**
     * Set `$scripts` with the new one (replacing).
     *
     * @return $this
     */
    public function setScripts(array $scripts);

    /**
     * Merge new scripts into `$scripts` without loosing the old.
     *
     * @return $this
     */
    public function mergeScripts(array $scripts);

    /**
     * Get value from `$jquery` var.
     */
    public function getJquery(): string;

    /**
     * Set `$jquery` with the new one (replacing).
     *
     * @return $this
     */
    public function setJquery(string $jquery);

    /**
     * Get value from `$attributes` var.
     */
    public function getAttributes(): array;

    /**
     * Set `$attributes` with the new one (replacing).
     *
     * @return $this
     */
    public function setAttributes(array $attributes);

    /**
     * Merge new attributes into `$attributes` without loosing the old.
     *
     * @return $this
     */
    public function mergeAttributes(array $attributes);

    /**
     * Get value from `$cookieBanner` var.
     *
     * @return null|string
     */
    public function getCookieBanner();

    /**
     * Set `$cookieBanner` new value.
     *
     * @return $this
     */
    public function setCookieBanner(string $banner);

    /**
     * Get value from `$doctype` var.
     */
    public function getDoctype(): string;

    /**
     * Set `$doctype` new value.
     *
     * @return $this
     */
    public function setDoctype(string $doctype);

    /**
     * Get value from `$charset` var.
     */
    public function getCharset(): string;

    /**
     * Set `$charset` new value.
     *
     * @return $this
     */
    public function setCharset(string $charset = 'UTF-8');

    /**
     * Get value from `$language` var.
     */
    public function getLanguage(): string;

    /**
     * Set `$language` new value.
     *
     * @return $this
     */
    public function setLanguage(string $language);

    /**
     * Get value from `$title` var.
     */
    public function getTitle(): string;

    /**
     * Set `$title` new value.
     *
     * @return $this
     */
    public function setTitle(string $title);

    /**
     * Get value from `$favicon` var.
     */
    public function getFavicon(): string;

    /**
     * Set `$favicon` new value,
     *
     * @return $this
     */
    public function setFavicon(string $favicon);
}
