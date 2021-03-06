<?php

namespace nms\filepond;

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
    public $sourcePath = __dir__ . '/js/file-validate-type';

    /**
     * {@inheritdoc}
     */
    public $js = [
        'file-validate-type.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        'nms\filepond\npm\FileTypeValidationAsset',
    ];
}
