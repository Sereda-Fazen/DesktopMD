<?php

/**
 * Created by PhpStorm.
 * User: obana
 * Date: 07.06.16
 * Time: 15:47
 */
class FiltersMowDirectCest
{


    function T965TestACheckboxFilter(Step\Acceptance\LoginStepsMowDirect $I, \Page\FiltersMowDirect $filtersMowDirect) {
          $filtersMowDirect->filtersCheckbox();
    }

}