<?php

use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{

    function loginSuccess(AcceptanceTester $I, \Page\Login $loginPage) {
        $loginPage->login();
        $loginPage->loginInvalid('mowdirect@gmail.com', '123456');
        $I->see('From your My Account Dashboard you have the ability to view','div.welcome-msg');
        $loginPage->logout();
    }

    /**
     * @tr-suite R32
     * @tr-case T1359
     */
/*
    function T1359UseCategoryNavigationToNavigateToTheVariousSaleDepartments(Page\CategoryNavigation $categoryNavigation, \Step\Acceptance\ProductsSteps $I)
    {

        $categoryNavigation->home();
        $categoryNavigation->saleDepartment();
    }
*/

}

