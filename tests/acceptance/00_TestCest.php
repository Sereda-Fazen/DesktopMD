<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{


    function T965TestACheckboxFilter(Step\Acceptance\FiltersSteps $I, \Page\FiltersMowDirect $filtersMowDirect) {
        $filtersMowDirect->filtersCheckbox();
        $I->checkFilters();
    }


}

