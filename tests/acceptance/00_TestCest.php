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
/*
    /**
     * @tr-suite 9
     * @tr-case 129
     */
/*
    function T1359UseCategoryNavigationToNavigateToTheVariousSaleDepartments(Page\CategoryNavigation $categoryNavigation, \Step\Acceptance\ProductsSteps $I)
    {

        $categoryNavigation->home();
        $categoryNavigation->saleDepartment();
    }
*/

}

