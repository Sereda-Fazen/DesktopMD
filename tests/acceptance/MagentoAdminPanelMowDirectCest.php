<?php

/**
 * Created by PhpStorm.
 * User: obana
 * Date: 08.06.16
 * Time: 15:56
 */
class MagentoAdminPanelMowDirectCest
{
/*
    function deleteCustomerFromAdminPanel(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoAdminPanel $magentoAdminPanel) {
        $I->loginAdminPanel('testing','Da1mat1an5');
        $magentoAdminPanel->deleteCustomer('mowdirect@gmail.com');
    }

*/
    function T762CreateANewVersionControlledPageAndSaveIt(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoManageContent $manageContent) {
        $I->loginAdminPanel('testing','Da1mat1an5');
        $manageContent->goToManagePage() ;
    }



}