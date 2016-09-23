<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{

        function T1401TestTheSortByDropdownTopAndBottom(Page\CategoryNavigation $categoryNavigation, \Step\Acceptance\CategorySteps $I)
        {
                $categoryNavigation->home();
                $categoryNavigation->lawnTractor();
                $I->sortBy();

        }



}

