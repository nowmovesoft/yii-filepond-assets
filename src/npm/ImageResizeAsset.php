<?php

namespace nms\filepond\npm;

use yii\web\AssetBundle;

/**
 * Asset for Image resize plugin in FilePond.
 * @author Michael Naumov <vommuan@gmail.com>
 */
class ImageResizeAsset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@npm/filepond-plugin-image-resize';

    /**
     * {@inheritdoc}
     */
    public $js = [
        (YII_ENV_DEV) ? 'dist/filepond-plugin-image-resize.js' : 'dist/filepond-plugin-image-resize.min.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        'nms\filepond\FilePondAsset',
    ];
}
