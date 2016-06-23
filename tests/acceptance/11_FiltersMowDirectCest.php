<?php

/**
 * @group filter
 */
class FiltersMowDirectCest
{


    function T992TestACheckboxFilter(Step\Acceptance\FiltersSteps $I, \Page\FiltersMowDirect $filtersMowDirect) {
        $filtersMowDirect->filtersCheckbox();
        $I->checkFilters();
    }

}