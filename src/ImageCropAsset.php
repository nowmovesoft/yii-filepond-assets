<?php

namespace nms\filepond;

use yii\web\AssetBundle;

/**
 * Asset for Image crop plugin in FilePond.
 * @author Michael Naumov <vommuan@gmail.com>
 */
class ImageCropAsset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = __dir__ . '/js/image-crop';

    /**
     * {@inheritdoc}
     */
    public $js = [
        'image-crop.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        'nms\filepond\npm\ImageCropAsset',
    ];
}
