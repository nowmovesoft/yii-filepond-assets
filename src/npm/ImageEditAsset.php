<?php

namespace nms\filepond\npm;

use yii\web\AssetBundle;

/**
 * Asset for Image edit plugin in FilePond.
 * @author Michael Naumov <vommuan@gmail.com>
 */
class ImageEditAsset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@npm/filepond-plugin-image-edit';

    /**
     * {@inheritdoc}
     */
    public $css = [
        (YII_ENV_DEV) ? 'dist/filepond-plugin-image-edit.css' : 'dist/filepond-plugin-image-edit.min.css',
    ];

    /**
     * {@inheritdoc}
     */
    public $js = [
        (YII_ENV_DEV) ? 'dist/filepond-plugin-image-edit.js' : 'dist/filepond-plugin-image-edit.min.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        'nms\filepond\FilePondAsset',
    ];
}
