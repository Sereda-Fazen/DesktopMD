<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{

    function categoryNavigationTop10(Page\CategoryNavigation $category, \Step\Acceptance\ProductsSteps $I) {
        $category->home();
        $category->checkTop10();
        $I->amountTopCategories10();
    }

    function categoryNavigationSaleDepartment(Page\CategoryNavigation $category, \Step\Acceptance\ProductsSteps $I) {
        $category->home();
        $category->checkTop25();
        $I->amountTopCategories25();
    }


}

