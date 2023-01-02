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
}