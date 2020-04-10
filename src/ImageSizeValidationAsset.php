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
    public $sourcePath = '@npm/filepond-plugin-image-validate-size';

    /**
     * {@inheritdoc}
     */
    public $js = [
        (YII_ENV_DEV) ? 'dist/filepond-plugin-image-validate-size.js' : 'dist/filepond-plugin-image-validate-size.min.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        'nms\filepond\FilePondAsset',
    ];
}
