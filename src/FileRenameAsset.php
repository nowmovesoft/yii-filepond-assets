<?php

namespace nms\filepond;

use yii\web\AssetBundle;

/**
 * Asset for File rename plugin in FilePond.
 * @author Michael Naumov <vommuan@gmail.com>
 */
class FileRenameAsset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = __dir__ . '/js/file-rename';

    /**
     * {@inheritdoc}
     */
    public $js = [
        'file-rename.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        'nms\filepond\npm\FileRenameAsset',
    ];
}
