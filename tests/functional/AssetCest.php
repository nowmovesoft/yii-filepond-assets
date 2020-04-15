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
}
