<?php

namespace nms\filepond;

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
    public $sourcePath = __dir__ . '/js/file-metadata';

    /**
     * {@inheritdoc}
     */
    public $js = [
        'file-metadata.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        'nms\filepond\npm\FileMetadataAsset',
    ];
}
