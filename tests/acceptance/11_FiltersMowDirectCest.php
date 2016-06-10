<?php

/**
 * @group filter
 */
class FiltersMowDirectCest
{


    function T965TestACheckboxFilter(Step\Acceptance\FiltersSteps $I, \Page\FiltersMowDirect $filtersMowDirect) {
        $filtersMowDirect->filtersCheckbox();
        $I->checkFilters();
    }

}