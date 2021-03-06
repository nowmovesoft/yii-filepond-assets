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
    public $sourcePath = __dir__ . '/js/image-exif-orientation';

    /**
     * {@inheritdoc}
     */
    public $js = [
        'image-exif-orientation.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        'nms\filepond\npm\ImageExifOrientationAsset',
    ];
}
