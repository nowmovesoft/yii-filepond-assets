<?php

namespace nms\filepond;

use yii\web\AssetBundle;

/**
 * Asset for File encode plugin in FilePond.
 * @author Michael Naumov <vommuan@gmail.com>
 */
class FileEncodeAsset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = __dir__ . '/js/file-encode';

    /**
     * {@inheritdoc}
     */
    public $js = [
        'file-encode.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        'nms\filepond\npm\FileEncodeAsset',
    ];
}
