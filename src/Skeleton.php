<?php

namespace Skeleton;

class Skeleton implements SkeletonInterface
{
    /**
     * Default CSS
     *
     * The default CSS is using Bootsrap v5,
     * visit https://getbootstrap.com for more information.
     */
    protected array $styles = ['https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css'];

    /**
     * Default JS
     *
     * The default JS is using Bootstrap v5,
     * visit https://getbootstrap.com for more information.
     */
    protected array $scripts = ['https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js'];

    /**
     * Default jQuery
     *
     * jQuery is need for preloader to work correctly, we use
     * v3.6.0 and min version.
     */
    protected string $jquery = 'https://code.jquery.com/jquery-3.6.0.min.js';

    /**
     * Body Attributes
     *
     * If you have some tag body attributes, you can add it here.
     */
    protected array $attributes = [];

    /**
     * PreLoad Page
     *
     * If you want to use preloader screen, set to `true`. The default is `false`.
     */
    protected bool $preload = false;

    /**
     * Cookie Banner
     *
     * If you need a cookie banner, feel free to set a value at here.
     * This library cookie banner is using Cookie-Script.Com (suggestion).
     *
     * Parameter is https://cdn.cookie-script.com/s/xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx.js
     * or just copy your js url and paste in here.
     *
     * If your website isn't have the quality to use cookie, leave it `null`.
     */
    protected ?string $cookieBanner = null;

    /**
     * Doctype Declaration
     *
     * All HTML documents must start with a <!DOCTYPE> declaration.
     * The declaration is not an HTML tag. It is an "information" to the browser
     * about what document type to expect. - W3SCHOOLS.COM
     */
    protected string $doctype = '<!DOCTYPE>';

    /**
     * Meta Charset
     *
     * To display an HTML page correctly, a web browser must know the character
     * set used in the page. - W3SCHOOLS.COM
     *
     * In modern browser or HTML5 the default charset is UTF-8, if you have
     * another option it's up to you.
     */
    protected string $charset = 'UTF-8';

    /**
     * Page Language
     *
     * You should always include the lang attribute inside the <html> tag,
     * to declare the language of the Web page. This is meant to assist
     * search engines and browsers. - W3SCHOOLS.COM
     */
    protected string $language = 'en';

    /**
     * Web Title
     *
     * The contents of a page title is very important for search engine
     * optimization (SEO)! The page title is used by search engine algorithms to
     * decide the order when listing pages in search results. - W3SCHOOLS.COM
     */
    protected string $title = 'Welcome';

    /**
     * Favicon
     *
     * The default protocol is using `/favicon.ico` or
     * fill it with your own link.
     */
    protected string $favicon = '/favicon.ico';

    // /**
    //  * Meta
    //  *
    //  * If you have your own meta put it here. There is 3 types attribute of meta : name,
    //  * http-equiv and property. (in common)
    //  *
    //  * This config will generate
    //  *
    //  *   name attribute       --> <meta name="name" content="..." />
    //  *   http-equiv attribute --> <meta http-equiv="name" content="..."/>
    //  *   property attribute   --> <meta property="name" content="..."/>
    //  *
    //  * @see https://gist.github.com/lancejpollard/1978404
    //  */
    // protected array $meta = [];

    /**
     * Get value from `$styles` var.
     */
    public function getStyles(): array
    {
        return $this->styles;
    }

    /**
     * Set `$styles` with the new one (replacing).
     *
     * @return $this
     */
    public function setStyles(array $styles)
    {
        $this->styles = $styles;

        return $this;
    }

    /**
     * Merge new styles into `$styles` without loosing the old.
     *
     * @return $this
     */
    public function mergeStyles(array $styles)
    {
        $this->styles = array_merge($this->styles, $styles);

        return $this;
    }

    /**
     * Get value from `$scripts` var.
     */
    public function getScripts(): array
    {
        return $this->scripts;
    }

    /**
     * Set `$scripts` with the new one (replacing).
     *
     * @return $this
     */
    public function setScripts(array $scripts)
    {
        $this->scripts = $scripts;

        return $this;
    }

    /**
     * Merge new scripts into `$scripts` without loosing the old.
     *
     * @return $this
     */
    public function mergeScripts(array $scripts)
    {
        $this->scripts = array_merge($this->scripts, $scripts);

        return $this;
    }

    /**
     * Get value from `$jquery` var.
     */
    public function getJquery(): string
    {
        return $this->jquery;
    }

    /**
     * Set `$jquery` with the new one (replacing).
     *
     * @return $this
     */
    public function setJquery(string $jquery)
    {
        $this->jquery = $jquery;

        return $this;
    }

    /**
     * Get value from `$attributes` var.
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * Set `$attributes` with the new one (replacing).
     *
     * @return $this
     */
    public function setAttributes(array $attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Merge new attributes into `$attributes` without loosing the old.
     *
     * @return $this
     */
    public function mergeAttributes(array $attributes)
    {
        $this->attributes = array_merge($this->attributes, $attributes);

        return $this;
    }

    /**
     * Get value from `$preload` var.
     */
    public function getStatusPreload(): bool
    {
        return $this->preload;
    }

    /**
     * Alias of `getStatusPreload()` with status is `true`.
     */
    public function getStatusPreloadIsEnabled(): bool
    {
        return $this->getStatusPreload() === true;
    }

    /**
     * Alias of `getStatusPreload()` with status is `false`.
     */
    public function getStatusPreloadIsDisabled(): bool
    {
        return $this->getStatusPreload() === false;
    }

    /**
     * Set `$preload` status.
     *
     * @return $this
     */
    public function setStatusPreload(bool $status)
    {
        $this->preload = $status;

        return $this;
    }

    /**
     * Alias of `setStatusPreload(bool $status)` with status is `true`.
     *
     * @return $this
     */
    public function setStatusPreloadIsEnabled()
    {
        $this->setStatusPreload(true);

        return $this;
    }

    /**
     * Alias of `setStatusPreload(bool $status)` with status is `false`.
     *
     * @return $this
     */
    public function setStatusPreloadIsDisabled()
    {
        $this->setStatusPreload(false);

        return $this;
    }

    /**
     * Get value from `$cookieBanner` var.
     *
     * @return null|string
     */
    public function getCookieBanner()
    {
        return $this->cookieBanner;
    }

    /**
     * Set `$cookieBanner` new value.
     *
     * @return $this
     */
    public function setCookieBanner(string $banner)
    {
        $this->cookieBanner = $banner;

        return $this;
    }

    /**
     * Get value from `$doctype` var.
     */
    public function getDoctype(): string
    {
        return $this->doctype;
    }

    /**
     * Set `$doctype` new value.
     *
     * @return $this
     */
    public function setDoctype(string $doctype)
    {
        $this->doctype = $doctype;

        return $this;
    }

    /**
     * Get value from `$charset` var.
     */
    public function getCharset(): string
    {
        return $this->charset;
    }

    /**
     * Set `$charset` new value.
     *
     * @return $this
     */
    public function setCharset(string $charset = 'UTF-8')
    {
        $this->charset = $charset;

        return $this;
    }

    /**
     * Get value from `$language` var.
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * Set `$language` new value.
     *
     * @return $this
     */
    public function setLanguage(string $language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get value from `$title` var.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set `$title` new value.
     *
     * @return $this
     */
    public function setTitle(string $title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get value from `$favicon` var.
     */
    public function getFavicon(): string
    {
        return $this->favicon;
    }

    /**
     * Set `$favicon` new value,
     *
     * @return $this
     */
    public function setFavicon(string $favicon)
    {
        $this->favicon = $favicon;

        return $this;
    }
}
