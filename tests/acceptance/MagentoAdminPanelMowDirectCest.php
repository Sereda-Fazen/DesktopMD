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


//// 2.CMS > Pages > Manage Hierarchy

        function T765CreateANewNode(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoManageHierarchy $magentoManageHierarchy) {
            $I->loginAdminPanel('testing','Da1mat1an5');
            $magentoManageHierarchy->goToManageHierarchyPage();
            $magentoManageHierarchy->createNode('test-title-node','test-url-node');
        }

     //   function T774EditANode(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoManageHierarchy $magentoManageHierarchy) {
     //       $I->loginAdminPanel('testing','Da1mat1an5');
     //       $magentoManageHierarchy->goToManageHierarchyPage();
     //       $magentoManageHierarchy->editNode('test-title-node');
    //    }

        function T767DeleteANode(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoManageHierarchy $magentoManageHierarchy) {
            $I->loginAdminPanel('testing','Da1mat1an5');
            $magentoManageHierarchy->goToManageHierarchyPage();
            $magentoManageHierarchy->deleteNodeFromTree('test-title-node');
        }

        function T768AddAPageToTheTree(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoManageHierarchy $magentoManageHierarchy) {
            $I->loginAdminPanel('testing','Da1mat1an5');
            $magentoManageHierarchy->goToManageHierarchyPage();
            $magentoManageHierarchy->addPageToTree1('test-title-1');
        }

        function T769RemoveAPageFromTheTree(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoManageHierarchy $magentoManageHierarchy) {
            $I->loginAdminPanel('testing','Da1mat1an5');
            $magentoManageHierarchy->goToManageHierarchyPage();
            $magentoManageHierarchy->deletePageFromTree('test-title-1');
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
            $magentoManageHierarchy->editNode('test-title-node-1');
        }

        function T775AddAPageToTheTree(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoManageHierarchy $magentoManageHierarchy) {
            $I->loginAdminPanel('testing','Da1mat1an5');
            $magentoManageHierarchy->goToManageHierarchyPage();
            $magentoManageHierarchy->addPageToTree1('test-non-title-1');
        }

        function T776RemoveAPageFromTheTree(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoManageHierarchy $magentoManageHierarchy) {
            $I->loginAdminPanel('testing','Da1mat1an5');
            $magentoManageHierarchy->goToManageHierarchyPage();
            $magentoManageHierarchy->deletePageFromTree('test-non-title-1');
            $magentoManageHierarchy->deleteNodeFromTree('test-title-node-1');
        }

    ///  Delete Test Pages CMS->Manage Content
    function deleteTestPages(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoManageContent $manageContent) {
        $I->loginAdminPanel('testing','Da1mat1an5');
        $manageContent->goToManagePage();
        $manageContent->searchPage('test-url-1');
        $manageContent->deletePage();
        $manageContent->searchPage('test-non-url-1');
        $manageContent->deletePage();
    }

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

            function T777TestTheVariousFilters(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoProNav $magentoProNav) {
                $I->loginAdminPanel('testing','Da1mat1an5');
                $magentoProNav->goToProNavItemsManagerPage();
                $magentoProNav->variosFilter('Lawn');
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




        //// 4 CMS > Static Blocks

            function T784AddANewBlock(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoStaticBlocks $magentoStaticBlocks) {
                $I->loginAdminPanel('testing','Da1mat1an5');
                $magentoStaticBlocks->goToStaticBlocksPage();
                $magentoStaticBlocks->createNewStaticBlock('Test Block','test_block','Test Content');
            }

            function T786EditABlock(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoStaticBlocks $magentoStaticBlocks) {
                $I->loginAdminPanel('testing','Da1mat1an5');
                $magentoStaticBlocks->goToStaticBlocksPage();
                $magentoStaticBlocks->editStaticBlock('Test Block','Test Block1');
            }

            function T787DeleteABlock(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoStaticBlocks $magentoStaticBlocks) {
                $I->loginAdminPanel('testing','Da1mat1an5');
                $magentoStaticBlocks->goToStaticBlocksPage();
                $magentoStaticBlocks->deleteStaticBlock('Test Block1');
            }

            function T783TestTheVariousFilters(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoStaticBlocks $magentoStaticBlocks) {
                $I->loginAdminPanel('testing','Da1mat1an5');
                $magentoStaticBlocks->goToStaticBlocksPage();
                $magentoStaticBlocks->variosFilter('link_giftcards','17/06/2010','17/06/2014','17/06/2011','17/06/2016');
            }


        //// 5. CMS > Banner


            function T790AddANewBanner(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoBanners $magentoBanners) {
                $I->loginAdminPanel('testing','Da1mat1an5');
                $magentoBanners->goToStaticBannersPage();
                $magentoBanners->createNewBanner('Test Banner','Test Content');
            }

            function T791EditABanner(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoBanners $magentoBanners) {
                $I->loginAdminPanel('testing','Da1mat1an5');
                $magentoBanners->goToStaticBannersPage();
                $magentoBanners->editStaticBlock('Test Banner','Test Banner1');
            }

            function T793DeleteABannerFromTheBannerEditPage(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoBanners $magentoBanners) {
                $I->loginAdminPanel('testing','Da1mat1an5');
                $magentoBanners->goToStaticBannersPage();
                $magentoBanners->deleteStaticBlock('Test Banner1');
            }

        function T788TestTheVariousFilters(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoBanners $magentoBanners) {
            $I->loginAdminPanel('testing','Da1mat1an5');
            $magentoBanners->goToStaticBannersPage();
            $magentoBanners->variousFilter('MowHow','10','400');
        }
    //!!!BUG
      //  function T789AddANewBlockAndThenDeleteItFromTheActionsMenu(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoBanners $magentoBanners) {
      //      $I->loginAdminPanel('testing','Da1mat1an5');
      //      $magentoBanners->goToStaticBannersPage();
      //      $magentoBanners->createNewBanner('DeleteTst','Test Delete Content');
      //      $magentoBanners->deleteFromActionMenu('DeleteTst');
      //  }



    ////6. Catalog > Datafeed Manager
    ////6.1. Grid View

        function T794TestTheVariousFilters(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoDataFeedManager $magentoDataFeedManager) {
            $I->loginAdminPanel('testing','Da1mat1an5');
            $magentoDataFeedManager->goToDataFeedManagerPage();
            $magentoDataFeedManager->variousFilter('20/06/2011','20/06/2017');
        }

        // $magentoDataFeedManager->addDataFeed('test_template','/feeds/','Header pattern','Product pattern','Footer pattern');

        function T795HitAddFeedButton(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoDataFeedManager $magentoDataFeedManager) {
            $I->loginAdminPanel('testing','Da1mat1an5');
            $magentoDataFeedManager->goToDataFeedManagerPage();
            $magentoDataFeedManager->checkAddFeedButton();
        }

        function T797T802EditADataFeed(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoDataFeedManager $magentoDataFeedManager) {
            $I->loginAdminPanel('testing','Da1mat1an5');
            $magentoDataFeedManager->goToDataFeedManagerPage();
            $magentoDataFeedManager->editDataFeed('amazonAds');
        }

        function T805HitBackButton(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoDataFeedManager $magentoDataFeedManager) {
            $I->loginAdminPanel('testing','Da1mat1an5');
            $magentoDataFeedManager->goToDataFeedManagerPage();
            $magentoDataFeedManager->checkBackEditPage();
        }


    // 7. Customer > Customer Segments

        function T806TestTheVariousFilters(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoCustomerSegments $magentoCustomerSegments) {
            $I->loginAdminPanel('testing','Da1mat1an5');
            $magentoCustomerSegments->goToManageSegmentsPage();
            $magentoCustomerSegments->variousFilter('1');
        }

        function T807AddANewCustomerSegments(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoCustomerSegments $magentoCustomerSegments) {
            $I->loginAdminPanel('testing','Da1mat1an5');
            $magentoCustomerSegments->goToManageSegmentsPage();
            $magentoCustomerSegments->createNewSegment('Test Segment','Test Description');
        }

        function T808EditACustomerSegment(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoCustomerSegments $magentoCustomerSegments) {
            $I->loginAdminPanel('testing','Da1mat1an5');
            $magentoCustomerSegments->goToManageSegmentsPage();
            $magentoCustomerSegments->searchSegment('Test Segment');
            $magentoCustomerSegments->editSegment('Test Description2');
        }

        function T809DeleteACustomerSegment(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoCustomerSegments $magentoCustomerSegments) {
            $I->loginAdminPanel('testing','Da1mat1an5');
            $magentoCustomerSegments->goToManageSegmentsPage();
            $magentoCustomerSegments->searchSegment('Test Segment');
            $magentoCustomerSegments->deleteSegment();
        }



    // 8. Newsletters > Mailchimp > Bulk Synch > Export

        function T811RunAnExportAndSeeThatItWorks(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoNewsletters $magentoNewsletters) {
            $I->loginAdminPanel('testing','Da1mat1an5');
            $magentoNewsletters->goToExportNewsletter();
            $magentoNewsletters->runExport();
        }


///////////////////////////////////         R:21 CONTENT EDITING          //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//// !. Catalog > Manage Products
// 1.1.Grid View

    function T823TestTheVariousFilters(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoManageProducts $manageProducts) {
        $I->loginAdminPanel('testing','Da1mat1an5');
        $manageProducts->goToManageProductsPage();
        $manageProducts->variousFilter();
    }

    function T824AddASimpleProduct(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoManageProducts $manageProducts) {
        $I->loginAdminPanel('testing','Da1mat1an5');
        $manageProducts->goToManageProductsPage();
        $manageProducts->addSimpleProduct('simple test product','Test Description','Test','10','100','1');
    }

    function T1330AddASimpleProductWithCustomAttributes(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoManageProducts $manageProducts) {
        $I->loginAdminPanel('testing','Da1mat1an5');
        $manageProducts->goToManageProductsPage();
        $manageProducts->addSimpleProductCustomerAttributes('simple test attribute product','Test Description','Test','Test-SKU-123321 ','200','2');
    }

    function T825EditAProduct(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoManageProducts $manageProducts) {
        $I->loginAdminPanel('testing','Da1mat1an5');
        $manageProducts->goToManageProductsPage();
        $manageProducts->searchName('simple test product');
        $manageProducts->editAProductLink();
    }

    function T826ChangeTheProductsStatus(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoManageProducts $manageProducts) {
        $I->loginAdminPanel('testing','Da1mat1an5');
        $manageProducts->goToManageProductsPage();
        $manageProducts->searchName('simple test product');
        $manageProducts->changeStatus();
    }


    function T827UpdateAttributes(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoManageProducts $manageProducts) {
        $I->loginAdminPanel('testing','Da1mat1an5');
        $manageProducts->goToManageProductsPage();
        $manageProducts->searchName('simple test attribute product');
        $manageProducts->updateAttributes('simple test attribute product1');
        $manageProducts->searchName('simple test attribute product1');
    }

    function T828EditAProduct(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoManageProducts $manageProducts) {
        $I->loginAdminPanel('testing','Da1mat1an5');
        $manageProducts->goToManageProductsPage();
        $manageProducts->searchName('simple test product');
        $manageProducts->editAProduct('Test-SKU-33333 ','3');
    }

    function T831ResetAfterAnEdit(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoManageProducts $manageProducts) {
        $I->loginAdminPanel('testing','Da1mat1an5');
        $manageProducts->goToManageProductsPage();
        $manageProducts->searchName('simple test product');
        $manageProducts->resetUpdates('TEST123123123','simple test product');

    }

    function T830CreateAnAttribute(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoManageProducts $manageProducts) {
        $I->loginAdminPanel('testing','Da1mat1an5');
        $manageProducts->goToManageProductsPage();
        $manageProducts->searchName('simple test product');
        $manageProducts->createAnAttribute();
    }


    function T829DuplicateAProduct(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoManageProducts $manageProducts) {
        $I->loginAdminPanel('testing','Da1mat1an5');
        $manageProducts->goToManageProductsPage();
        $manageProducts->searchName('simple test attribute product1');
        $manageProducts->duplicate();
        $manageProducts->searchName('simple test attribute product1');
    }

    function deleteTestProducts(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoManageProducts $manageProducts) {
        $I->loginAdminPanel('testing','Da1mat1an5');
        $manageProducts->goToManageProductsPage();
        $manageProducts->searchName('simple test');
        $manageProducts->deleteTestProducts();
    }



*/


//// 2. Catalog > Manage Categories

    function T832AddACategory(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoManageCategories $manageCategories) {
        $I->loginAdminPanel('testing','Da1mat1an5');
        $manageCategories->goToManageCategory();
        $manageCategories->createCategory('Test category');
    }

    function T833EditACategory(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoManageCategories $manageCategories) {
        $I->loginAdminPanel('testing','Da1mat1an5');
        $manageCategories->goToManageCategory();
        $manageCategories->editCategory('Test category');
    }


    function T839DeleteACategory(Step\Acceptance\AdminPanelLoginSteps $I, \Page\MagentoManageCategories $manageCategories) {
        $I->loginAdminPanel('testing','Da1mat1an5');
        $manageCategories->goToManageCategory();
        $manageCategories->deleteCategory('Test category');
    }




}