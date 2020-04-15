<?php

namespace app\controllers;

use yii\web\Controller;

class TestController extends Controller
{
    public function actionFilepond()
    {
        return $this->render('filepond');
    }

    public function actionJquery()
    {
        return $this->render('jquery');
    }

    public function actionFileEncode()
    {
        return $this->render('file-encode');
    }

    public function actionFileMetadata()
    {
        return $this->render('file-metadata');
    }

    public function actionFilePoster()
    {
        return $this->render('file-poster');
    }

    public function actionFileRename()
    {
        return $this->render('file-rename');
    }

    public function actionFileSizeValidation()
    {
        return $this->render('file-size-validation');
    }

    public function actionFileTypeValidation()
    {
        return $this->render('file-type-validation');
    }

    public function actionImageCrop()
    {
        return $this->render('image-crop');
    }

    public function actionImageEdit()
    {
        return $this->render('image-edit');
    }

    public function actionImageExifOrientation()
    {
        return $this->render('image-exif-orientation');
    }

    public function actionImageFilter()
    {
        return $this->render('image-filter');
    }

    public function actionImagePreview()
    {
        return $this->render('image-preview');
    }

    public function actionImageResize()
    {
        return $this->render('image-resize');
    }

    public function actionImageSizeValidation()
    {
        return $this->render('image-size-validation');
    }

    public function actionImageTransform()
    {
        return $this->render('image-transform');
    }
}
