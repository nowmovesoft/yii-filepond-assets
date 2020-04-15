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

### Assets conformity

Basic namespace is `nms\filepond`. If you want to connect wrapper or plugin, you don't need to connect FilePond itself directly. It will connect automatically.

| FilePond Script | Yii Asset |
|-----------------|-----------|
| [FilePond itself](https://pqina.nl/filepond/docs/patterns/installation/) | FilePondAsset |
| [jQuery wrapper](https://pqina.nl/filepond/docs/patterns/frameworks/jquery/) | JqueryAsset |
| [File encode plugin](https://pqina.nl/filepond/docs/patterns/plugins/file-encode/) | FileEncodeAsset |
| [File metadata plugin](https://pqina.nl/filepond/docs/patterns/plugins/file-metadata/) | FileMetadataAsset |
| [File poster plugin](https://pqina.nl/filepond/docs/patterns/plugins/file-poster/) | FilePosterAsset |
| [File rename plugin](https://pqina.nl/filepond/docs/patterns/plugins/file-rename/) | FileRenameAsset |
| [File size validation plugin](https://pqina.nl/filepond/docs/patterns/plugins/file-validate-size/) | FileSizeValidationAsset |
| [File type validation plugin](https://pqina.nl/filepond/docs/patterns/plugins/file-validate-type/) | FileTypeValidationAsset |
| [Image EXIF orientation plugin](https://pqina.nl/filepond/docs/patterns/plugins/image-exif-orientation/) | ImageExifOrientationAsset |
| [Image crop plugin](https://pqina.nl/filepond/docs/patterns/plugins/image-crop/) | ImageCropAsset |
| [Image edit plugin](https://pqina.nl/filepond/docs/patterns/plugins/image-edit/) | ImageEditAsset |
| [Image filter plugin](https://pqina.nl/filepond/docs/patterns/plugins/image-filter/) | ImageFilterAsset |
| [Image preview plugin](https://pqina.nl/filepond/docs/patterns/plugins/image-preview/) | ImagePreviewAsset |
| [Image resize plugin](https://pqina.nl/filepond/docs/patterns/plugins/image-resize/) | ImageResizeAsset |
| [Image size validation plugin](https://pqina.nl/filepond/docs/patterns/plugins/image-validate-size/) | ImageSizeValidationAsset |
| [Image transform plugin](https://pqina.nl/filepond/docs/patterns/plugins/image-transform/) | ImageTransformAsset |

## Tests

To run tests you should install [Docker](https://docs.docker.com/get-docker/) and [Docker Compose](https://docs.docker.com/compose/install/) first.

After that, go to `bin` directory and run the following commands:

```bash
./composer.sh install
./codecept.sh run
```
