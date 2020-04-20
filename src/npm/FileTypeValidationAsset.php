<?php

namespace nms\filepond\npm;

use yii\web\AssetBundle;

/**
 * Asset for File type validation plugin in FilePond.
 * @author Michael Naumov <vommuan@gmail.com>
 */
class FileTypeValidationAsset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@npm/filepond-plugin-file-validate-type';

    /**
     * {@inheritdoc}
     */
    public $js = [
        (YII_ENV_DEV) ? 'dist/filepond-plugin-file-validate-type.js' : 'dist/filepond-plugin-file-validate-type.min.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        'nms\filepond\FilePondAsset',
    ];
}
