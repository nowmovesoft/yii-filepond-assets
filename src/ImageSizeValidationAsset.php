<?php

namespace nms\filepond;

use yii\web\AssetBundle;

/**
 * Asset for Image size validation plugin in FilePond.
 * @author Michael Naumov <vommuan@gmail.com>
 */
class ImageSizeValidationAsset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = __dir__ . '/js/image-validate-size';

    /**
     * {@inheritdoc}
     */
    public $js = [
        'image-validate-size.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        'nms\filepond\npm\ImageSizeValidationAsset',
    ];
}
