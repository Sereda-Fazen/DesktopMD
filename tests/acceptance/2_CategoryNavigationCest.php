<?php
use \Step\Acceptance;

/**
 * @group categoryNavigation
 */
class CategoryNavigationCest
{

    function checkSearchInvalid(Page\CategoryNavigation $category, \Step\Acceptance\ProductsSteps $I) {
        $category->home();
        $category->checkTop10();
        $I->amountTopCategories();
    }






}

