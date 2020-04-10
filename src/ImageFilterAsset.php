<?php

namespace nms\filepond;

use yii\web\AssetBundle;

/**
 * Asset for Image filter plugin in FilePond.
 * @author Michael Naumov <vommuan@gmail.com>
 */
class ImageFilterAsset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@npm/filepond-plugin-image-filter';

    /**
     * {@inheritdoc}
     */
    public $js = [
        (YII_ENV_DEV) ? 'dist/filepond-plugin-image-filter.js' : 'dist/filepond-plugin-image-filter.min.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        'nms\filepond\FilePondAsset',
    ];
}
