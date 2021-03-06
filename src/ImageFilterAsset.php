<?php

namespace nms\filepond;

use yii\web\AssetBundle;

/**
 * Asset for Image filter plugin in FilePond.
 * @author Michael Naumov <vommuan@gmail.com>
 */
class ImageFilterAsset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = __dir__ . '/js/image-filter';

    /**
     * {@inheritdoc}
     */
    public $js = [
        'image-filter.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        'nms\filepond\npm\ImageFilterAsset',
    ];
}
