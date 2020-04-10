<?php

namespace nms\filepond;

use yii\web\AssetBundle;

/**
 * Asset for Image preview plugin in FilePond.
 * @author Michael Naumov <vommuan@gmail.com>
 */
class ImagePreviewAsset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@npm/filepond-plugin-image-preview';

    /**
     * {@inheritdoc}
     */
    public $css = [
        (YII_ENV_DEV) ? 'dist/filepond-plugin-image-preview.css' : 'dist/filepond-plugin-image-preview.min.css',
    ];

    /**
     * {@inheritdoc}
     */
    public $js = [
        (YII_ENV_DEV) ? 'dist/filepond-plugin-image-preview.js' : 'dist/filepond-plugin-image-preview.min.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        'nms\filepond\FilePondAsset',
    ];
}
