<?php

namespace nms\filepond;

use yii\web\AssetBundle;

/**
 * Asset for using jQuery with FilePond.
 * @author Michael Naumov <vommuan@gmail.com>
 */
class JqueryAsset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@npm/jquery-filepond';

    /**
     * {@inheritdoc}
     */
    public $js = [
        'filepond.jquery.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        'yii\web\JqueryAsset',
        'nms\filepond\FilePondAsset',
    ];
}
