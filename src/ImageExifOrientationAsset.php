<?php

namespace nms\filepond;

use yii\web\AssetBundle;

/**
 * Asset for Image EXIF orientation plugin in FilePond.
 * @author Michael Naumov <vommuan@gmail.com>
 */
class ImageExifOrientationAsset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@npm/filepond-plugin-image-exif-orientation';

    /**
     * {@inheritdoc}
     */
    public $js = [
        (YII_ENV_DEV) ? 'dist/filepond-plugin-image-exif-orientation.js' : 'dist/filepond-plugin-image-exif-orientation.min.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        'nms\filepond\FilePondAsset',
    ];
}
