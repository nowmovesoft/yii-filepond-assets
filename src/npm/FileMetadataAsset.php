<?php

namespace nms\filepond\npm;

use yii\web\AssetBundle;

/**
 * Asset for File metadata plugin in FilePond.
 * @author Michael Naumov <vommuan@gmail.com>
 */
class FileMetadataAsset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@npm/filepond-plugin-file-metadata';

    /**
     * {@inheritdoc}
     */
    public $js = [
        (YII_ENV_DEV) ? 'dist/filepond-plugin-file-metadata.js' : 'dist/filepond-plugin-file-metadata.min.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        'nms\filepond\FilePondAsset',
    ];
}
