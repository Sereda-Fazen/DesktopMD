<?php
namespace Page;


class CategoryNavigation
{

    // T1400

    public static $lawnTractor = '//a[@href="/lawn-garden-tractors"]';
    public static $waitTractorsPanel = '//div[@class="category-collateral lawn-garden-tractors"]';

    // T1359

    public static $deals = '//a[@href="/sale-begins-now"]';
    public static $shopNow = '.curved.shadow.shop-now';
    public static $bestDeals = 'ul > li:nth-of-type(2) > span > a';
    public static $clearZone = '.floating-ticket>a';

    protected $tester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }



    public function home()
    {
        $I = $this->tester;
        $I->amOnPage('/');
    }

    public function lawnTractor(){
        $I = $this->tester;
        $I->waitAndClick(self::$lawnTractor);
        $I->waitForElement(self::$waitTractorsPanel);
    }

    public function saleDepartment(){
        $I = $this->tester;
        $I->waitAndClick(self::$deals);
        $I->waitAndClick(self::$shopNow);
        $I->waitForElement(self::$bestDeals);
        $I->waitForText('The Best Deals Around');
        $I->click(self::$bestDeals);
        $I->seeInCurrentUrl('/sale-begins-now');
        $I->waitAndClick(self::$clearZone);
        $I->waitForText('The Clearance Zone');
        $I->see('The Clearance Zone', 'h1');
        $I->seeInCurrentUrl('/sale-begins-now/clearance-zone');
    }


    ////////////////////////////////// T1535 Use the category navigation to navigate to the Various Category Marketing Pages

    public static $lawnMowersDropDown = '//a[@href="/lawn-mowers/"]';
    public static $lawnTractorDropDown = '//*[@class="product-navigation"]/ul/li[2]/a[contains(text(),"Lawn Tractors")]';
    public static $brushcuttersDropDown = '//*[@class="product-navigation"]//li[4]/a[contains(text(),"Brushcutters")]';
    public static $h1 = '//h1';
    public static $hedgetrimmersDropDown = '//*[@class="product-navigation"]//li[5]/a[contains(text(),"Hedgetrimmers")]';
    public static $chainsawsDropDown = '//*[@class="product-navigation"]//li[6]/a[contains(text(),"Chainsaws")]';
    public static $vacsBlowersDropDown = '//*[@class="product-navigation"]//li[7]/a[contains(text(),"Vacs & Blowers")]';
    public static $tillersDropDown = '//*[@class="product-navigation"]//li[8]/a[contains(text(),"Tillers")]';
    public static $moreDropDown = '//*[@class="product-navigation"]//li[9]/a[contains(text(),"More")]';

// Lawn Tractors Page.
    public static $lawnTractorsBlock = '//*[@alt="Lawn Tractors"]';
    public static $MountFieldLawnTractorLogo = '//*[@alt="Mountfield Lawn Tractors"]';

    public function goToLawnTractorsPage ()    {
        $I = $this->tester;
        $I->waitAndClick(self::$lawnTractorDropDown);
        $I->waitForElement(self::$h1);
        $I->see('Lawn & Garden Tractors', self::$h1);    }

    public function goToLawnMowersPage (){
        $I = $this->tester;
        $I->waitAndclick(self::$lawnMowersDropDown);
        $I->waitForElement(self::$h1);
        $I->see('Lawn Mowers', self::$h1);    }

    public function goToBrushcuttersPage (){
        $I = $this->tester;
        $I->waitAndclick(self::$brushcuttersDropDown);
        $I->waitForElement(self::$h1);
        $I->see('Brushcutters, Strimmers, Line Trimmers',self::$h1);    }

    public function goToHedgetrimmersPage(){
        $I = $this->tester;
        $I->waitAndclick(self::$hedgetrimmersDropDown);
        $I->waitForElement(self::$h1);
        $I->see('Hedgetrimmers & Hedgecutters',self::$h1);    }

    public function goToChainsawsPage(){
        $I = $this->tester;
        $I->waitAndclick(self::$chainsawsDropDown);
        $I->waitForElement(self::$h1);
        $I->see('Chainsaws',self::$h1);    }

    public function goToVacsBlowersPage(){
        $I = $this->tester;
        $I->waitAndclick(self::$vacsBlowersDropDown);
        $I->waitForElement(self::$h1);
        $I->see('Garden Vacuums, Leaf Blowers & Sweepers',self::$h1);    }

    public function goToTillersPage(){
        $I = $this->tester;
        $I->waitAndclick(self::$tillersDropDown);
        $I->waitForElement(self::$h1);
        $I->see('Cultivators, Tillers & Rotavators',self::$h1);    }

    public function goToMorePage(){
        $I = $this->tester;
        $I->waitAndclick(self::$moreDropDown);
        $I->waitForElement(self::$h1);
        $I->see('Other Garden Machinery',self::$h1);    }


// Lawn Mowers Page
    public static $petrolLawnMowersBlock ='//*[@alt="Petrol Lawn Mowers"]';
    public static $petrolFourWhellRotaryLawnMowersBlock = '//*[@class="subcat_container petrol-four-wheel-rotary-lawn-mowers"]/h3/a';
    public static $petrolRealRollerRotary = '//*[@alt="Petrol Rear Roller Rotary Lawnmowers"]';
    public static $panelMainsElectricLawnMowers = '//*[@alt="Mains-Electric Lawn Mowers"]';

    public function goToPetrolLawnMowersFromLawnMowerPage ()    {
        $I = $this->tester;
        $I->waitAndClick(self::$petrolLawnMowersBlock);
        $I->waitForElement(self::$h1);
        $I->see('Petrol Lawn Mowers', self::$h1);    }

    public function goToMainsElectricLawnMowersPage (){
        $I = $this->tester;
        $I->waitAndClick(self::$panelMainsElectricLawnMowers);
        $I->waitForElement(self::$h1);
        $I->see('Mains-Electric Lawn Mowers', self::$h1);    }

// Petrol Lawn Mowers Page
    public static  $petrolFourWheelRotaryLawnMowers = '//*[@alt="Petrol Four Wheel Rotary Lawn Mowers"]';

    public function goToPetrolFourWheelRotaryLawnMowersFromPetrolLawnMowersPage ()    {
        $I = $this->tester;
        $I->waitAndClick(self::$petrolFourWheelRotaryLawnMowers);
        $I->waitForElement(self::$h1);
        $I->see('Petrol Four Wheel Rotary Lawn Mowers', self::$h1);    }

// Petrol Four Wheel Rotary Lawn Mowers Page
    public static $panelSelfPropelled4WheelPetrolLawnMowers = '//*[@ alt="Self-Propelled 4-Wheel Petrol Lawn Mowers"]';
    public static $panelPush4WheelPetrolLawnMowers = '//*[@alt="Push 4-Wheel Petrol Lawn Mowers"]';

    public function goToSelfPropelled4WheelPetrolLawnMowersPage ()    {
        $I = $this->tester;
        $I->waitAndClick(self::$panelSelfPropelled4WheelPetrolLawnMowers);
        $I->waitForElement(self::$h1);
        $I->see('Self-Propelled 4-Wheel Petrol Lawn Mowers', self::$h1);    }

    public static $returnToPetrolFourWheelRotaryLawnLink = '//a[contains(text(),"Petrol Four Wheel Rotary Lawn Mowers")]';

    public function returnToPetrolFourWheelRotaryLawnPage(){
        $I = $this->tester;
        $I->waitAndClick(self::$returnToPetrolFourWheelRotaryLawnLink);
        $I->waitForElementVisible(self::$h1);
        $I->see('Petrol Four Wheel Rotary Lawn Mowers', self::$h1);    }

// 4-Wheel Petrol Lawn Mowers
    public function goToPush4WheelPetrolLawnMowersPage(){
        $I = $this->tester;
        $I->waitAndClick(self::$panelPush4WheelPetrolLawnMowers);
        $I->waitForElement(self::$h1);
        $I->see('Push 4-Wheel Petrol Lawn Mowers', self::$h1);    }

// Mains-Electric Lawn Mowers Page
    public static $panelElectricRearRollerRotaryLawnMowers = '//*[@alt="Electric Rear-Roller Rotary Lawn Mowers"]';

    public function goToElectricRearRollerRotaryLawnMowersPage(){
        $I = $this->tester;
        $I->waitAndClick(self::$panelElectricRearRollerRotaryLawnMowers);
        $I->waitForElement(self::$h1);
        $I->see('Electric Rear-Roller Rotary Lawn Mowers', self::$h1);    }

    public static $panelElectricFourWheelRotaryLawnMowers  = '//*[@alt="Electric Four-Wheel Rotary Lawn Mowers"]';

    public function goToElectricFourWheelRotaryLawnMowersPage(){
        $I = $this->tester;
        $I->waitAndClick(self::$panelElectricFourWheelRotaryLawnMowers);
        $I->waitForElement(self::$h1);
        $I->see('Electric Four-Wheel Rotary Lawn Mowers', self::$h1);    }

// Electric Rear-Roller Rotary Lawn Mowers page
    public static $returnMainsElectricLawnMowersPage = '//a[contains(text(),"Mains-Electric Lawn Mowers")]';

    public function returnMainsElectricLawnMowersPage (){
        $I = $this->tester;
        $I->waitAndClick(self::$returnMainsElectricLawnMowersPage);
        $I->waitForElement(self::$h1);
        $I->see('Mains-Electric Lawn Mowers', self::$h1);    }

/// Lawn Tractors
    public static $panelRideOnMowers = '//*[@alt="Ride-On Mowers (Rear-Engine)"]';
    public static $panelLawnMower = '//*[@alt="Lawn Tractors"]';
    public static $gardenTractors = '//*[@alt="Garden Tractors"]';

    public function goToRideOnMowersPage(){
        $I = $this->tester;
        $I->waitAndClick(self::$panelRideOnMowers);
        $I->waitForElement(self::$h1);
        $I->see('Ride-On Mowers (Rear-Engine)', self::$h1);    }

    public function goToLawnMowersPanelPage(){
        $I = $this->tester;
        $I->waitAndClick(self::$panelLawnMower);
        $I->waitForElement(self::$h1);
        $I->see('Lawn Tractors', self::$h1);    }

    public function goToGardenTractorsPage(){
        $I = $this->tester;
        $I->waitAndClick(self::$gardenTractors);
        $I->waitForElement(self::$h1);
        $I->see('Garden Tractors', self::$h1);    }

// Brushcutters, Strimmers, Line Trimmers Page
    public static  $panelPetrolBrushcuttersAndLineTrimmers = '//*[@alt="Petrol Brushcutters & Line Trimmers"]';

    public function goToPetrolBrushcuttersAndLineTrimmersPage(){
        $I = $this->tester;
        $I->waitAndClick(self::$panelPetrolBrushcuttersAndLineTrimmers);
        $I->waitForElement(self::$h1);
        $I->see('Petrol Brushcutters & Line Trimmers', self::$h1);    }

// Hedgetrimmers Page
    public static $panelPetrolHedgecutters = '//*[@alt="Petrol Hedgecutters"]';
    public static $panelElectricHedgetrimmers = './/*[@alt="Electric Hedgetrimmers"]';

    public function goToPetrolHedgecuttersPage(){
        $I = $this->tester;
        $I->waitAndClick(self::$panelPetrolHedgecutters);
        $I->waitForElement(self::$h1);
        $I->see('Petrol Hedgecutters', self::$h1);    }

    public static $returnHedgetrimmersHedgecuttersPage = '//a[contains(text(),"Hedgetrimmers & Hedgecutters")]';

    public function returnHedgetrimmersHedgecuttersPage (){
        $I = $this->tester;
        $I->waitAndClick(self::$returnHedgetrimmersHedgecuttersPage);
        $I->waitForElement(self::$h1);
        $I->see('Hedgetrimmers & Hedgecutters', self::$h1);    }

    public function goToElectricHedgetrimmersPage (){
        $I = $this->tester;
        $I->waitAndClick(self::$panelElectricHedgetrimmers);
        $I->waitForElement(self::$h1);
        $I->see('Electric Hedgetrimmers', self::$h1);    }

// ChainSaws Page
    public static $panelPetrolChainsaws  = '//*[@alt="Petrol Chainsaws"]';
    public static $panelElectricChainsaws = './/*[@alt="Electric Chainsaws"]';

    public function goToPetrolChainsawsPage (){
        $I = $this->tester;
        $I->waitAndClick(self::$panelPetrolChainsaws);
        $I->waitForElement(self::$h1);
        $I->see('Petrol Chainsaws', self::$h1);    }

    public static $returnChainsawsPage = '//*[@id="top"]//a[contains(text(),"Chainsaws")]';

    public function returnChainsawsPage(){
        $I = $this->tester;
        $I->waitAndClick(self::$returnChainsawsPage);
        $I->waitForElement(self::$h1);
        $I->see('Chainsaws', self::$h1);    }

    public function goToElectricChainsawsPage(){
        $I = $this->tester;
        $I->waitAndClick(self::$panelElectricChainsaws);
        $I->waitForElement(self::$h1);
        $I->see('Electric Chainsaws', self::$h1);    }


// Vacs & Blowers page
    public static $panelHandHeldGardenBlowerVacs = '//*[@alt="Hand Held Garden Blower-Vacs"]';
    public static $panelBackpackPowerLeafBlowers = '//*[@alt="Backpack Power Leaf Blowers"]';
    public static $panelWheeledLawnLitterVacuumsAndLeafSweepers = '//*[@alt="Wheeled Lawn & Litter Vacuums and Leaf Sweepers"]';

    public function goToHandHeldGardenBlowerVacsPage(){
        $I = $this->tester;
        $I->waitAndClick(self::$panelHandHeldGardenBlowerVacs);
        $I->waitForElement(self::$h1);
        $I->see('Hand Held Garden Blower-Vacs', self::$h1);    }

    public static $returnGardenVacuumsLeafBlowersSweepers = '//*[@id="top"]//a[contains(text(),"Garden Vacuums, Leaf Blowers & Sweepers")]';

    public function returnGardenVacuumsLeafBlowersSweepersPage(){
        $I = $this->tester;
        $I->waitAndClick(self::$returnGardenVacuumsLeafBlowersSweepers);
        $I->waitForElement(self::$h1);
        $I->see('Garden Vacuums, Leaf Blowers & Sweepers', self::$h1);    }

    public function goToBackpackPowerLeafBlowersPage(){
        $I = $this->tester;
        $I->waitAndClick(self::$panelBackpackPowerLeafBlowers);
        $I->waitForElement(self::$h1);
        $I->see('Backpack Power Leaf Blowers', self::$h1);    }

    public function goToWheeledLawnLitterVacuumsAndLeafSweepersPage(){
        $I = $this->tester;
        $I->waitAndClick(self::$panelWheeledLawnLitterVacuumsAndLeafSweepers);
        $I->waitForElement(self::$h1);
        $I->see('Wheeled Lawn & Litter Vacuums and Leaf Sweepers', self::$h1);    }

//// More Pages
    public static $panelGardenChippersShredders = '//*[@ alt="Garden Chippers & Shredders"]';
    public static $panelFirewoodTools = '//*[@alt="Firewood Tools"]';

    public function goToGardenChippersShreddersPage(){
        $I = $this->tester;
        $I->waitAndClick(self::$panelGardenChippersShredders);
        $I->waitForElement(self::$h1);
        $I->see('Garden Chippers & Shredders', self::$h1);    }

    public function goToFirewoodToolsPage(){
        $I = $this->tester;
        $I->waitAndClick(self::$panelFirewoodTools);
        $I->waitForElement(self::$h1);
        $I->see('Firewood Tools', self::$h1);    }

// Garden Chippers Shredders Page
    public static $panelElectricGardenShredder = '//*[@alt="Electric Garden Shredders"]';
    public static $panelPetrolChipperShredders = '//*[@alt="Petrol Chipper-Shredders"]';
    public static $panelSnowCleaners = '//*[@alt="Snow Clearance"]';

    public function goToElectricGardenShredderPage(){
        $I = $this->tester;
        $I->waitAndClick(self::$panelElectricGardenShredder);
        $I->waitForElement(self::$h1);
        $I->see('Electric Garden Shredders', self::$h1);    }

    public function goToPetrolChipperShreddersPage(){
        $I = $this->tester;
        $I->waitAndClick(self::$panelPetrolChipperShredders);
        $I->waitForElement(self::$h1);
        $I->see('Petrol Chipper-Shredders', self::$h1);    }

    public function goToSnowClearancePage(){
        $I = $this->tester;
        $I->waitAndClick(self::$panelSnowCleaners);
        $I->waitForElement(self::$h1);
        $I->see('Snow Clearance', self::$h1);    }


// Electric Garden Shredders Page
    public static $returnGardenChippersShredders = '//*[@id="top"]//a[contains(text(),"Garden Chippers & Shredders")]';

    public function returnGardenChippersShreddersPage(){
        $I = $this->tester;
        $I->waitAndClick(self::$returnGardenChippersShredders);
        $I->waitForElementVisible(self::$h1);
        $I->see('Garden Chippers & Shredders', self::$h1);    }

// Firewood Tools Page
    public static $panelLogSplitters = '//*[@alt="Log Splitters"]';

    public function goToLogSplittersPage(){
        $I = $this->tester;
        $I->waitAndClick(self::$panelLogSplitters);
        $I->waitForElement(self::$h1);
        $I->see('Log Splitters', self::$h1);
    }

// Snow Cleaners Page
    public static $panelSnowThrowersSnowBlowers = './/*[@ alt="Snow Throwers / Snow Blowers"]';

    public function goToSnowThrowersSnowBlowersPage(){
        $I = $this->tester;
        $I->waitAndClick(self::$panelSnowThrowersSnowBlowers);
        $I->waitForElement(self::$h1);
        $I->see('Snow Throwers / Snow Blowers', self::$h1);    }

}