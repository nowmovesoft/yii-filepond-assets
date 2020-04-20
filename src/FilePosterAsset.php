<?php

namespace nms\filepond;

use yii\web\AssetBundle;

/**
 * Asset for File poster plugin in FilePond.
 * @author Michael Naumov <vommuan@gmail.com>
 */
class FilePosterAsset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = __dir__ . '/js/file-poster';

    /**
     * {@inheritdoc}
     */
    public $js = [
        'file-poster.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        'nms\filepond\npm\FilePosterAsset',
    ];
}
