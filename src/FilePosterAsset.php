<?php

namespace nms\filepond;

use yii\web\AssetBundle;

/**
 * Asset for File poster plugin in FilePond.
 * @author Michael Naumov <vommuan@gmail.com>
 */
class FilePosterAsset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@npm/filepond-plugin-file-poster';

    /**
     * {@inheritdoc}
     */
    public $css = [
        (YII_ENV_DEV) ? 'dist/filepond-plugin-file-poster.css' : 'dist/filepond-plugin-file-poster.min.css',
    ];

    /**
     * {@inheritdoc}
     */
    public $js = [
        (YII_ENV_DEV) ? 'dist/filepond-plugin-file-poster.js' : 'dist/filepond-plugin-file-poster.min.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        'nms\filepond\FilePondAsset',
    ];
}
