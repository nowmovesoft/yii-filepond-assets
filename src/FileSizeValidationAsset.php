<?php

namespace nms\filepond;

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
    public $sourcePath = __dir__ . '/js/file-validate-size';

    /**
     * {@inheritdoc}
     */
    public $js = [
        'file-validate-size.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        'nms\filepond\npm\FileSizeValidationAsset',
    ];
}
