<?php

namespace nms\filepond;

use yii\web\AssetBundle;

/**
 * Asset for Image transform validation plugin in FilePond.
 * @author Michael Naumov <vommuan@gmail.com>
 */
class ImageTransformAsset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@npm/filepond-plugin-image-transform';

    /**
     * {@inheritdoc}
     */
    public $js = [
        (YII_ENV_DEV) ? 'dist/filepond-plugin-image-transform.js' : 'dist/filepond-plugin-image-transform.min.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        'nms\filepond\FilePondAsset',
    ];
}
