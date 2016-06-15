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
    /*
        function T762CreateANewVersionControlledPageAndSaveIt(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoManageContent $manageContent) {
            $I->loginAdminPanel('testing','Da1mat1an5');
            $manageContent->goToManagePage();
            $manageContent->createNewControlledPage('test-title','test-url','Test Heading','this is the test message');
        }

        function T763CreateANewNonVersionControlledPageAndSaveIt(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoManageContent $manageContent) {
            $I->loginAdminPanel('testing','Da1mat1an5');
            $manageContent->goToManagePage();
            $manageContent->createNewNonVersionControlledPage('test-non-title','test-non-url','Test Heading non-version','this is the test message for non-version page');
        }

        function T760MakeAChangeToAnNonVersionControlledExistingPageAndSaveIt(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoManageContent $manageContent) {
            $I->loginAdminPanel('testing','Da1mat1an5');
            $manageContent->goToManagePage();
            $manageContent->searchPage('test-non-url');
            $manageContent->changeNonVersionPage('test-non-title-1','test-non-url-1');
            $manageContent->searchPage('test-non-url-1');
            }

        function T761MakeAChangeToAAnVersionControlledExistingPageAndSaveIt(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoManageContent $manageContent) {
            $I->loginAdminPanel('testing','Da1mat1an5');
            $manageContent->goToManagePage();
            $manageContent->searchPage('test-url');
            $manageContent->changeNonVersionPage('test-title-1','test-url-1');
            $manageContent->searchPage('test-url-1');
        }

        function T812CheckChangeShowOnFrontEnd( \Page\MagentoManageContent $manageContent) {
            $manageContent->checkControlledVersionPage();
            $manageContent->checkNonControlledVersionPage();
        }

        function T764TestTheVariousFilteredSearches(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoManageContent $manageContent) {
            $I->loginAdminPanel('testing','Da1mat1an5');
            $manageContent->goToManagePage();
            $manageContent->searchFilter('test-url-1','test-non-title-1');
        }


 ///////function deletePages(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoManageContent $manageContent) {
            $I->loginAdminPanel('testing','Da1mat1an5');
            $manageContent->goToManagePage();
            $manageContent->searchPage('test-url-1');
            $manageContent->deletePage();
            $manageContent->searchPage('test-non-url-1');
            $manageContent->deletePage();
        }

//// 2.CMS > Pages > Manage Hierarchy

    function T765CreateANewNode(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoManageHierarchy $magentoManageHierarchy) {
        $I->loginAdminPanel('testing','Da1mat1an5');
        $magentoManageHierarchy->goToManageHierarchyPage();
        $magentoManageHierarchy->createNode('test-title-node','test-url-node');
    }

    function T774EditANode(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoManageHierarchy $magentoManageHierarchy) {
        $I->loginAdminPanel('testing','Da1mat1an5');
        $magentoManageHierarchy->goToManageHierarchyPage();
        $magentoManageHierarchy->editNode();
    }

    function T767DeleteANode(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoManageHierarchy $magentoManageHierarchy) {
        $I->loginAdminPanel('testing','Da1mat1an5');
        $magentoManageHierarchy->goToManageHierarchyPage();
        $magentoManageHierarchy->deleteNodeFromTree();
    }

    function T768AddAPageToTheTree(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoManageHierarchy $magentoManageHierarchy) {
        $I->loginAdminPanel('testing','Da1mat1an5');
        $magentoManageHierarchy->goToManageHierarchyPage();
        $magentoManageHierarchy->addPageToTree('test-title-1');
    }

    function T769RemoveAPageFromTheTree(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoManageHierarchy $magentoManageHierarchy) {
        $I->loginAdminPanel('testing','Da1mat1an5');
        $magentoManageHierarchy->goToManageHierarchyPage();
        $magentoManageHierarchy->deletePageFromTree();
    }

//// 2.1 Test for child scope

    function T771DeleteCurrentHierarchy(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoManageHierarchy $magentoManageHierarchy) {
        $I->loginAdminPanel('testing','Da1mat1an5');
        $magentoManageHierarchy->goToManageHierarchyPage();
        $magentoManageHierarchy->deleteCurrentHierarchy();
    }

    function T772CreateANewNode(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoManageHierarchy $magentoManageHierarchy) {
        $I->loginAdminPanel('testing','Da1mat1an5');
        $magentoManageHierarchy->goToManageHierarchyPage();
        $magentoManageHierarchy->createNode('test-title-node-1','test-url-node-1');
    }

    function T773EditANode(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoManageHierarchy $magentoManageHierarchy) {
        $I->loginAdminPanel('testing','Da1mat1an5');
        $magentoManageHierarchy->goToManageHierarchyPage();
        $magentoManageHierarchy->editNode1();
    }

    function T775AddAPageToTheTree(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoManageHierarchy $magentoManageHierarchy) {
        $I->loginAdminPanel('testing','Da1mat1an5');
        $magentoManageHierarchy->goToManageHierarchyPage();
        $magentoManageHierarchy->addPageToTree1('test-non-title-1');
    }

    function T776RemoveAPageFromTheTree(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoManageHierarchy $magentoManageHierarchy) {
        $I->loginAdminPanel('testing','Da1mat1an5');
        $magentoManageHierarchy->goToManageHierarchyPage();
        $magentoManageHierarchy->deletePageFromTree1();
       // $magentoManageHierarchy->deleteNodeFromTree1();
    }

*/

//// 3.CMS > Pronav

    function T780CreateAPronavItem(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoProNav $magentoProNav) {
        $I->loginAdminPanel('testing','Da1mat1an5');
        $magentoProNav->goToProNavItemsManagerPage();
        $magentoProNav->createProNavItem('testPronav','12');
    }

    function T782DeleteAPronavItem(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoProNav $magentoProNav) {
        $I->loginAdminPanel('testing','Da1mat1an5');
        $magentoProNav->goToProNavItemsManagerPage();
        $magentoProNav->deleteProNavItem('testPronav');
    }

    function T779CreateAPronavItemAndThenUseTheActionsMenuToChangeItsStatus(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoProNav $magentoProNav) {
        $I->loginAdminPanel('testing','Da1mat1an5');
        $magentoProNav->goToProNavItemsManagerPage();
        $magentoProNav->createProNavItem('testPronav','12');
      //  $magentoProNav->createProNavItem1('testPronav','testUrl','12','12','12','12','12');
        $magentoProNav->changeItemStatusOnActionMenu('testPronav');
    }


    function T778CreateAPronavItemAndThenUseTheActionsMenutoDeleteIt(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoProNav $magentoProNav) {
        $I->loginAdminPanel('testing','Da1mat1an5');
        $magentoProNav->goToProNavItemsManagerPage();
        //  $magentoProNav->createProNavItem('testPronav','12');
        $magentoProNav->deleteProNavItemActionMenu('testPronav');
    }











}