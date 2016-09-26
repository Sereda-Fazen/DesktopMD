<?php
use \Step\Acceptance;

/**
 * @group categoryNavigation
 */
class CategoryNavigationCest
{


    function T1535UseTheCategoryNavigationToNavigateToLawnMowersPages (Page\CategoryNavigation $categoryNavigation)        {
        $categoryNavigation->home();
        $categoryNavigation->goToLawnMowersPage();
        $categoryNavigation->goToPetrolLawnMowersFromLawnMowerPage();
        $categoryNavigation->goToPetrolFourWheelRotaryLawnMowersFromPetrolLawnMowersPage();
        $categoryNavigation->goToSelfPropelled4WheelPetrolLawnMowersPage();
        $categoryNavigation->returnToPetrolFourWheelRotaryLawnPage();
        $categoryNavigation->goToPush4WheelPetrolLawnMowersPage();
        $categoryNavigation->goToLawnMowersPage();
        $categoryNavigation->goToMainsElectricLawnMowersPage();
        $categoryNavigation->goToElectricRearRollerRotaryLawnMowersPage();
        $categoryNavigation->returnMainsElectricLawnMowersPage();
        $categoryNavigation->goToElectricFourWheelRotaryLawnMowersPage();        }

    function T1535UseTheCategoryNavigationToNavigateToLawnTractorsPages (Page\CategoryNavigation $categoryNavigation)        {
        $categoryNavigation->goToLawnTractorsPage();
        $categoryNavigation->goToRideOnMowersPage();
        $categoryNavigation->goToLawnTractorsPage();
        $categoryNavigation->goToLawnMowersPanelPage();
        $categoryNavigation->goToLawnTractorsPage();
        $categoryNavigation->goToLawnTractorsPage();        }

    function T1535UseTheCategoryNavigationToNavigateToBrushcuttersPages (Page\CategoryNavigation $categoryNavigation)        {
        $categoryNavigation->goToBrushcuttersPage();
        $categoryNavigation->goToPetrolBrushcuttersAndLineTrimmersPage();        }

    function T1535UseTheCategoryNavigationToNavigateToHedgetrimmersPages (Page\CategoryNavigation $categoryNavigation)        {
        $categoryNavigation->goToHedgetrimmersPage();
        $categoryNavigation->goToPetrolHedgecuttersPage();
        $categoryNavigation->returnHedgetrimmersHedgecuttersPage();
        $categoryNavigation->goToElectricHedgetrimmersPage();        }

    function T1535UseTheCategoryNavigationToNavigateToChainsawsPages (Page\CategoryNavigation $categoryNavigation)        {
        $categoryNavigation->goToChainsawsPage();
        $categoryNavigation->goToPetrolChainsawsPage();
        $categoryNavigation->returnChainsawsPage();
        $categoryNavigation->goToElectricChainsawsPage();        }

    function T1535UseTheCategoryNavigationToNavigateToVacsBlowersPages (Page\CategoryNavigation $categoryNavigation)        {
        $categoryNavigation->goToVacsBlowersPage();
        $categoryNavigation->goToHandHeldGardenBlowerVacsPage();
        $categoryNavigation->returnGardenVacuumsLeafBlowersSweepersPage();
        $categoryNavigation->goToBackpackPowerLeafBlowersPage();
        $categoryNavigation->returnGardenVacuumsLeafBlowersSweepersPage();
        $categoryNavigation->goToWheeledLawnLitterVacuumsAndLeafSweepersPage();
    }

    function T1535UseTheCategoryNavigationToTillersPages (Page\CategoryNavigation $categoryNavigation)        {
        $categoryNavigation->goToTillersPage();
    }

    function T1535UseTheCategoryNavigationToMorePages (Page\CategoryNavigation $categoryNavigation)        {
        $categoryNavigation->goToMorePage();
        $categoryNavigation->goToGardenChippersShreddersPage();
        $categoryNavigation->goToElectricGardenShredderPage();
        $categoryNavigation->returnGardenChippersShreddersPage();
        $categoryNavigation->goToPetrolChipperShreddersPage();
        $categoryNavigation->goToMorePage();
        $categoryNavigation->goToFirewoodToolsPage();
        $categoryNavigation->goToLogSplittersPage();
        $categoryNavigation->goToMorePage();
        $categoryNavigation->goToSnowClearancePage();
        $categoryNavigation->goToSnowThrowersSnowBlowersPage();      }

    function T1359UseCategoryNavigationToNavigateToTheVariousSaleDepartments(Page\CategoryNavigation $categoryNavigation, \Step\Acceptance\ProductsSteps $I)
    {
        $categoryNavigation->home();
        $categoryNavigation->saleDepartment();
    }
    
    function T1400TestTheShowNumberDropdownTopAndBottom(Page\CategoryNavigation $categoryNavigation, \Step\Acceptance\CategorySteps $I) {
        $categoryNavigation->home();
        $categoryNavigation->lawnTractor();
        $I->randomPanel();
    }

    function T1401TestTheSortByDropdownTopAndBottom(Page\CategoryNavigation $categoryNavigation, \Step\Acceptance\CategorySteps $I)
    {
        $categoryNavigation->home();
        $categoryNavigation->lawnTractor();
        $I->sortBy();
        
    }
    function T1402TestThePagingTopAndBottom(Page\CategoryNavigation $categoryNavigation, \Step\Acceptance\CategorySteps $I)
    {
        $categoryNavigation->home();
        $categoryNavigation->lawnTractor();
        $I->paging();

    }







}

