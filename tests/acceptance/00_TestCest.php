<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{

    function checkSearchInvalid(Page\CategoryNavigation $category, \Step\Acceptance\ProductsSteps $I) {
        $category->home();
        $category->checkTop10();
        $I->amountTopCategories();
    }



}

