# Yii2 FilePond Assets

Yii2 assets bundles collection for [FilePond](https://pqina.nl/filepond/).

## Installation

If you don't have [Composer](http://getcomposer.org/), you may install it by following instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

Then you can install this library using the following command:

~~~
composer require nowmovesoft/yii-filepond-assets
~~~

## Usage

### Example

This code will add FilePond scripts to your view:

```php
<?php
// In Yii2 view file
use nms\filepond\FilePondAsset;

FilePondAsset::register($this);
```
