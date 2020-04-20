<?php

namespace nms\filepond;

use yii\web\AssetBundle;

/**
 * Asset for Image preview plugin in FilePond.
 * @author Michael Naumov <vommuan@gmail.com>
 */
class ImagePreviewAsset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = __dir__ . '/js/image-preview';

    /**
     * {@inheritdoc}
     */
    public $js = [
        'image-preview.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        'nms\filepond\npm\ImagePreviewAsset',
    ];
}
