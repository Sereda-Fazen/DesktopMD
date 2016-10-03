<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{

    /**
     * @tr-suite 9
     * @tr-case 128
     */

    function loginSuccess(AcceptanceTester $I, \Page\Login $loginPage) {
        $loginPage->login();
        $loginPage->loginInvalid('mowdirect@gmail.com', '123456');
        $I->see('From your My Account Dashboard you have the ability to view','div.welcome-msg');
        $loginPage->logout();
    }


}

