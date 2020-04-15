<?php

class AssetCest
{
    public function _before(FunctionalTester $I)
    {
    }

    public function testRegisterFilePond(FunctionalTester $I)
    {
        $I->amOnPage(['test/filepond']);
        $I->seeInSource('filepond.min.css');
        $I->seeInSource('filepond.min.js');
    }

    /**
     * @depends testRegisterFilePond
     */
    public function testRegisterJqueryWrapper(FunctionalTester $I)
    {
        $I->amOnPage(['test/jquery']);
        $I->seeInSource('filepond.min.css');
        $I->seeInSource('filepond.min.js');
        $I->seeInSource('jquery.js');
        $I->seeInSource('filepond.jquery.js');
    }

    /**
     * @depends testRegisterFilePond
     */
    public function testRegisterFileEncodePlugin(FunctionalTester $I)
    {
        $I->amOnPage(['test/file-encode']);
        $I->seeInSource('filepond.min.css');
        $I->seeInSource('filepond.min.js');
        $I->seeInSource('filepond-plugin-file-encode.min.js');
    }

    /**
     * @depends testRegisterFilePond
     */
    public function testRegisterFileMetadataPlugin(FunctionalTester $I)
    {
        $I->amOnPage(['test/file-metadata']);
        $I->seeInSource('filepond.min.css');
        $I->seeInSource('filepond.min.js');
        $I->seeInSource('filepond-plugin-file-metadata.min.js');
    }

    /**
     * @depends testRegisterFilePond
     */
    public function testRegisterFilePosterPlugin(FunctionalTester $I)
    {
        $I->amOnPage(['test/file-poster']);
        $I->seeInSource('filepond.min.css');
        $I->seeInSource('filepond.min.js');
        $I->seeInSource('filepond-plugin-file-poster.min.css');
        $I->seeInSource('filepond-plugin-file-poster.min.js');
    }

    /**
     * @depends testRegisterFilePond
     */
    public function testRegisterFileRenamePlugin(FunctionalTester $I)
    {
        $I->amOnPage(['test/file-rename']);
        $I->seeInSource('filepond.min.css');
        $I->seeInSource('filepond.min.js');
        $I->seeInSource('filepond-plugin-file-rename.min.js');
    }

    /**
     * @depends testRegisterFilePond
     */
    public function testRegisterFileSizeValidationPlugin(FunctionalTester $I)
    {
        $I->amOnPage(['test/file-size-validation']);
        $I->seeInSource('filepond.min.css');
        $I->seeInSource('filepond.min.js');
        $I->seeInSource('filepond-plugin-file-validate-size.min.js');
    }

    /**
     * @depends testRegisterFilePond
     */
    public function testRegisterFileTypeValidationPlugin(FunctionalTester $I)
    {
        $I->amOnPage(['test/file-type-validation']);
        $I->seeInSource('filepond.min.css');
        $I->seeInSource('filepond.min.js');
        $I->seeInSource('filepond-plugin-file-validate-type.min.js');
    }

    /**
     * @depends testRegisterFilePond
     */
    public function testRegisterImageCropPlugin(FunctionalTester $I)
    {
        $I->amOnPage(['test/image-crop']);
        $I->seeInSource('filepond.min.css');
        $I->seeInSource('filepond.min.js');
        $I->seeInSource('filepond-plugin-image-crop.min.js');
    }

    /**
     * @depends testRegisterFilePond
     */
    public function testRegisterImageEditPlugin(FunctionalTester $I)
    {
        $I->amOnPage(['test/image-edit']);
        $I->seeInSource('filepond.min.css');
        $I->seeInSource('filepond.min.js');
        $I->seeInSource('filepond-plugin-image-edit.min.css');
        $I->seeInSource('filepond-plugin-image-edit.min.js');
    }

    /**
     * @depends testRegisterFilePond
     */
    public function testRegisterImageExifOrientationPlugin(FunctionalTester $I)
    {
        $I->amOnPage(['test/image-exif-orientation']);
        $I->seeInSource('filepond.min.css');
        $I->seeInSource('filepond.min.js');
        $I->seeInSource('filepond-plugin-image-exif-orientation.min.js');
    }

    /**
     * @depends testRegisterFilePond
     */
    public function testRegisterImageFilterPlugin(FunctionalTester $I)
    {
        $I->amOnPage(['test/image-filter']);
        $I->seeInSource('filepond.min.css');
        $I->seeInSource('filepond.min.js');
        $I->seeInSource('filepond-plugin-image-filter.min.js');
    }

    /**
     * @depends testRegisterFilePond
     */
    public function testRegisterImagePreviewPlugin(FunctionalTester $I)
    {
        $I->amOnPage(['test/image-preview']);
        $I->seeInSource('filepond.min.css');
        $I->seeInSource('filepond.min.js');
        $I->seeInSource('filepond-plugin-image-preview.min.css');
        $I->seeInSource('filepond-plugin-image-preview.min.js');
    }

    /**
     * @depends testRegisterFilePond
     */
    public function testRegisterImageResizePlugin(FunctionalTester $I)
    {
        $I->amOnPage(['test/image-resize']);
        $I->seeInSource('filepond.min.css');
        $I->seeInSource('filepond.min.js');
        $I->seeInSource('filepond-plugin-image-resize.min.js');
    }

    /**
     * @depends testRegisterFilePond
     */
    public function testRegisterImageSizeValidationPlugin(FunctionalTester $I)
    {
        $I->amOnPage(['test/image-size-validation']);
        $I->seeInSource('filepond.min.css');
        $I->seeInSource('filepond.min.js');
        $I->seeInSource('filepond-plugin-image-validate-size.min.js');
    }

    /**
     * @depends testRegisterFilePond
     */
    public function testRegisterImageTransformPlugin(FunctionalTester $I)
    {
        $I->amOnPage(['test/image-transform']);
        $I->seeInSource('filepond.min.css');
        $I->seeInSource('filepond.min.js');
        $I->seeInSource('filepond-plugin-image-transform.min.js');
    }
}
