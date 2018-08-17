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

## Usage

Add \ShadeSoft\Twig\AssetVersionExtension to your Twig environment's dependencies, then you can use the filter:

```twig
{{ 'asset_path'|versionify }}
```
