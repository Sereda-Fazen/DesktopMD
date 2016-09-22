<?php
use \Step\Acceptance;

/**
 * @group categoryNavigation
 */
class CategoryNavigationCest
{
/**/
    /*
    
    function T1024Top10Products(Page\CategoryNavigation $category, \Step\Acceptance\ProductsSteps $I) {
        $category->home();
        $category->checkTop10();
        $I->amountTopCategories10();
    }

    function T1359SaleDepartments(Page\CategoryNavigation $categoryNavigation, \Step\Acceptance\ProductsSteps $I)
    {
        $categoryNavigation->home();
        $categoryNavigation->saleDepartment();
    }
        

    function T1400TestShowNumber(Page\CategoryNavigation $categoryNavigation, \Step\Acceptance\CategorySteps $I) {
        $categoryNavigation->home();
        $categoryNavigation->lawnTractor();
        $I->randomPanel();
        
    }
*/
    function T1401SortBy(Page\CategoryNavigation $categoryNavigation, \Step\Acceptance\CategorySteps $I)
    {
        $categoryNavigation->home();
        $categoryNavigation->lawnTractor();
        $I->sortBy();
        
    }






}

