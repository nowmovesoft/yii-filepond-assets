<?php

namespace nms\filepond;

use yii\web\AssetBundle;

/**
 * Asset for base FilePond implementation.
 * @author Michael Naumov <vommuan@gmail.com>
 */
class FilePondAsset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@npm/filepond';

    /**
     * {@inheritdoc}
     */
    public $css = [
        (YII_ENV_DEV) ? 'dist/filepond.css' : 'dist/filepond.min.css',
    ];

    /**
     * {@inheritdoc}
     */
    public $js = [
        (YII_ENV_DEV) ? 'dist/filepond.js' : 'dist/filepond.min.js',
    ];
}
