<?php

use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{


    /**
     * @tr-suite R32
     * @tr-case T1359
     */

    function T1359UseCategoryNavigationToNavigateToTheVariousSaleDepartments(Page\CategoryNavigation $categoryNavigation, \Step\Acceptance\ProductsSteps $I)
    {

        $categoryNavigation->home();
        $categoryNavigation->saleDepartment();
    }


}

