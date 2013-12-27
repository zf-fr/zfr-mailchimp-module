ZfrMailChimpModule
==================

[![Latest Stable Version](https://poser.pugx.org/zfr/zfr-mailchimp-module/v/stable.png)](https://packagist.org/packages/zfr/zfr-mailchimp-module)

ZfrMailChimpModule is a Zend Framework 2 module based on [ZfrMailChimp](https://github.com/zf-fr/zfr-mailchimp).

Requirements
------------
* PHP 5.3
* [Zend Framework 2](https://github.com/zendframework/zf2)
* [ZfrMailChimp](https://github.com/zf-fr/zfr-mailchimp)

Installation
------------

We recommend you to use Composer to install ZfrMailChimp:

```sh
php composer.phar require zfr/zfr-mailchimp-module:2.*
```

Enable ZfrMailChimpModule in your `application.config.php`, then copy-paste the file `zfr_mailchimp.local.php.dist` (that
you can find in the `config` folder of the module) to your `autoload` folder (don't forget to remove the .dist at
the end!).

Usage
-----

The module registers the MailChimpClient to the ZF 2 service manager. You can therefore get it like this:

```php
// If you want to client:
$mailChimpClient = $serviceManager->get('ZfrMailChimp\Client\MailChimpClient');
```

