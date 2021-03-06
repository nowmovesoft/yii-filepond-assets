<?php

namespace nms\filepond;

use yii\web\AssetBundle;

/**
 * Asset for Image transform validation plugin in FilePond.
 * @author Michael Naumov <vommuan@gmail.com>
 */
class ImageTransformAsset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = __dir__ . '/js/image-transform';

    /**
     * {@inheritdoc}
     */
    public $js = [
        'image-transform.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        'nms\filepond\npm\ImageTransformAsset',
    ];
}
