<?php

namespace nms\filepond\npm;

use yii\web\AssetBundle;

/**
 * Asset for File size validation plugin in FilePond.
 * @author Michael Naumov <vommuan@gmail.com>
 */
class FileSizeValidationAsset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@npm/filepond-plugin-file-validate-size';

    /**
     * {@inheritdoc}
     */
    public $js = [
        (YII_ENV_DEV) ? 'dist/filepond-plugin-file-validate-size.js' : 'dist/filepond-plugin-file-validate-size.min.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        'nms\filepond\FilePondAsset',
    ];
}
