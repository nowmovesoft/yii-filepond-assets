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
    public $sourcePath = '@npm/filepond-plugin-file-rename';

    /**
     * {@inheritdoc}
     */
    public $js = [
        (YII_ENV_DEV) ? 'dist/filepond-plugin-file-rename.js' : 'dist/filepond-plugin-file-rename.min.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        'nms\filepond\FilePondAsset',
    ];
}
