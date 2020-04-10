<?php

namespace nms\filepond;

use yii\web\AssetBundle;

/**
 * Asset for File Encode plugin in FilePond.
 * @author Michael Naumov <vommuan@gmail.com>
 */
class FileEncodeAsset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@npm/filepond-plugin-file-encode';

    /**
     * {@inheritdoc}
     */
    public $js = [
        (YII_ENV_DEV) ? 'dist/filepond-plugin-file-encode.js' : 'dist/filepond-plugin-file-encode.min.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        'nms\filepond\FilePondAsset',
    ];
}
