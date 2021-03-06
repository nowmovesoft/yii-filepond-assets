<?php

namespace nms\filepond;

use yii\web\AssetBundle;

/**
 * Asset for Image resize plugin in FilePond.
 * @author Michael Naumov <vommuan@gmail.com>
 */
class ImageResizeAsset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = __dir__ . '/js/image-resize';

    /**
     * {@inheritdoc}
     */
    public $js = [
        'image-resize.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        'nms\filepond\npm\ImageResizeAsset',
    ];
}
