<?php

namespace nms\filepond;

use yii\web\AssetBundle;

/**
 * Asset for Image crop plugin in FilePond.
 * @author Michael Naumov <vommuan@gmail.com>
 */
class ImageCropAsset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@npm/filepond-plugin-image-crop';

    /**
     * {@inheritdoc}
     */
    public $js = [
        (YII_ENV_DEV) ? 'dist/filepond-plugin-image-crop.js' : 'dist/filepond-plugin-image-crop.min.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        'nms\filepond\FilePondAsset',
    ];
}
