<?php

namespace nms\filepond;

use yii\web\AssetBundle;

/**
 * Asset for Image edit plugin in FilePond.
 * @author Michael Naumov <vommuan@gmail.com>
 */
class ImageEditAsset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = __dir__ . '/js/image-edit';

    /**
     * {@inheritdoc}
     */
    public $js = [
        'image-edit.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        'nms\filepond\npm\ImageEditAsset',
    ];
}
