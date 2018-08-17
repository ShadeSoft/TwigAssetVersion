# TwigAssetVersion

> Twig extension for versioning assets.

## Installation

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```console
$ composer require shadesoft/twig-asset-version
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

### Including into Symfony container

```yaml
# app/config/services.yml for Symfony 2-3 and config/services.yaml for Symfony 4

shadesoft.twig.asset_version_extension:
    class: ShadeSoft\Twig\AssetVersionExtension
    tags:
        - { name: twig.extension }
```

### Including into Slim Framework's Twig view renderer

```php
// src/dependencies.php

// ...
$container['view'] = function($c) {
    //...
    $view->addExtension(new ShadeSoft\Twig\AssetVersionExtension);
    //...
}
```

## Usage

Add \ShadeSoft\Twig\AssetVersionExtension to your Twig environment's dependencies (or include into one of the frameworks above), then you can use the filter:

```twig
{{ 'asset_path'|versionify }}
```
