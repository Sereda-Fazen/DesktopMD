<?php
/**
 * Created by PhpStorm.
 * User: obana
 * Date: 21.09.16
 * Time: 12:10
 */

namespace Page;
use Exception;


class SearchNew
{

    public static $URL = '/';
    public static $search = '#search';
    public static $clickSearch = '//button[@class="button search-button"]';
    public static $wait = '//div[@class="std"]';

    protected $tester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }



    public function search()
    {
        $I = $this->tester;
        $I->amOnPage(self::$URL);

    }

    public function searchInvalid($search)
    {
        $I = $this->tester;
        $I->fillField(self::$search, $search);
        $I->click(self::$clickSearch);
        $I->waitForElement(self::$wait);
    }


    ///////////////////////////////////////////////////////////////////////////

// Misspelling
    public static $searchField = '//*[@id="search"]';
    public static $searchField2 = '//*[@id="gsc-i-id1"]';
    public static $searchButton = '//*[@id="search_mini_form"]/div[1]/button';
    public static $searchButton2 = '//*[@id="___gcse_0"]/div/div/form/table[1]/tbody/tr/td[2]/input';
    public static $searchResultLink = '//i[contains(text(),"chainsaws")]';
    public static $searchResultMisspellingLink = '//i[contains(text(),"chinsaws")]';
    public static $noResult = '//*[@class="gsc-wrapper"]/div[2]/div/div/div[1]/div/div';


    public static $searchMisspellingResult = '//*[@class="gsc-results gsc-webResult"]/div[2]//a[contains(@href,"/chainsaws")]';
    public static $searchInvalidMisspellingResult = '//*[@class="gsc-results gsc-webResult"]/div[1]//a[contains(@href,"/chainsaws/")]';
    public static $misspellingBlock = '//*[@class="gs-result"]';

    public function searchMisspelling($searchMisspelling,$searchData)
    {
        $I= $this ->tester;
        $I->fillField(self::$searchField,$searchMisspelling);
        $I->click(self::$searchButton);
        $I->waitForElementVisible(self::$misspellingBlock);
     //   $I->see($searchData,self::$mispellingBlock);
     //   $I->see($searchMisspelling,self::$mispellingBlock);
        $I->see($searchData,self::$searchResultLink);
        $I->see($searchMisspelling,self::$searchResultMisspellingLink);
        $I->waitForElement(self::$searchMisspellingResult);
        return $this;
    }


    public static $search1Result = '//*[@class="gsc-results gsc-webResult"]/div[1]//a[contains(@href,"/lawn-mowers")]';
    public static $search1InvalidResult = '//*[@class="gsc-results gsc-webResult"]/div[1]//a[contains(@href,"/lawn-mowers/")]';
    public static $search2Result = '//*[@class="gsc-results gsc-webResult"]/div[1]//a[contains(@href,"/blog/2012/05/24/three-top-mowers-with-electric-start/")]';
    public static $search3Result = '//*[@class="gsc-results gsc-webResult"]/div[1]//a[contains(@href,"/lawn-garden-tractors")]';
    public static $search3InvalidResult = '//*[@class="gsc-results gsc-webResult"]/div[1]//a[contains(@href,"/lawn-garden-tractors/")]';
    public static $search4Result = '//*[@class="gsc-results gsc-webResult"]/div[1]//a[contains(@href,"/lawn-care/aerators-and-scarifiers")]';
    public static $search4InvalidResult = '//*[@class="gsc-results gsc-webResult"]/div[1]//a[contains(@href,"/lawn-care/aerators-and-scarifiers/")]';
    public static $search5Result = '//a[contains(@href,"/mountfield-1530m-lawn-tractor.html")]';
    public static $search6Result = '//*[@class="gsc-results gsc-webResult"]/div[1]//a[contains(@href,"/gm/firewood-tools/log-splitters")]';
    public static $search6InvalidResult = '//*[@class="gsc-results gsc-webResult"]/div[1]//a[contains(@href,"/gm/firewood-tools/log-splitters/")]';
    public static $search7Result = '//a[contains(@href,"/lawnflite-mini-rider-60rde-ride-on-mower.html")]';
    public static $search8Result = '//*[@class="gsc-results gsc-webResult"]/div[1]//a[contains(@href,"/lawnmowers/mountfield-lawnmowers")]';
    public static $search8InvalidResult = '//*[@class="gsc-results gsc-webResult"]/div[1]//a[contains(@href,"/lawnmowers/mountfield-lawnmowers/")]';
    public static $search9Result = '//*[@class="gsc-results gsc-webResult"]/div[1]//a[contains(@href,"/lawnmowers/honda-lawnmowers")]';
    public static $search9InvalidResult = '//*[@class="gsc-results gsc-webResult"]/div[1]//a[contains(@href,"/lawnmowers/honda-lawnmowers/")]';
    public static $search10Result = '//*[@class="gsc-results gsc-webResult"]/div[1]//a[contains(@href,"/lawn-mowers/petrol-lawnmowers/petrol-four-wheel-rotary-lawn-mowers/self-propelled-4-wheel-petrol-lawn-mowers/einhell-self-propelled-lawn-mowers")]';



    public function searchDifferentTerms($searchData1,$searchData2,$searchData3,$searchData4,$searchData5,$searchData6,$searchData7,$searchData8,$searchData9,$searchData10)
    {
        $I= $this ->tester;
        $I->fillField(self::$searchField,$searchData1);
        $I->click(self::$searchButton);
        $I->waitForElementVisible(self::$search1Result);
        $I->waitForElementNotVisible(self::$search1InvalidResult);
        $I->fillField(self::$searchField,$searchData2);
        $I->click(self::$searchButton);
        $I->waitForElementVisible(self::$search2Result);
        $I->fillField(self::$searchField,$searchData3);
        $I->click(self::$searchButton);
        $I->waitForElementVisible(self::$search3Result);
        $I->waitForElementNotVisible(self::$search3InvalidResult);
        $I->fillField(self::$searchField,$searchData4);
        $I->click(self::$searchButton);
        $I->waitForElementVisible(self::$search4Result);
        $I->waitForElementNotVisible(self::$search4InvalidResult);
        $I->fillField(self::$searchField,$searchData5);
        $I->click(self::$searchButton);
        $I->waitForElementVisible(self::$search5Result);
        $I->fillField(self::$searchField,$searchData6);
        $I->click(self::$searchButton);
        $I->waitForElementVisible(self::$search6Result);
        $I->waitForElementNotVisible(self::$search6InvalidResult);
        $I->fillField(self::$searchField,$searchData7);
        $I->click(self::$searchButton);
        $I->waitForElementVisible(self::$search7Result);
        $I->fillField(self::$searchField,$searchData8);
        $I->click(self::$searchButton);
        $I->waitForElementVisible(self::$search8Result);
        $I->waitForElementNotVisible(self::$search8InvalidResult);
        $I->fillField(self::$searchField,$searchData9);
        $I->click(self::$searchButton);
        $I->waitForElementVisible(self::$search9Result);
        $I->waitForElementNotVisible(self::$search9InvalidResult);
        $I->fillField(self::$searchField,$searchData10);
        $I->click(self::$searchButton);
        $I->waitForElementVisible(self::$search10Result);
    }


    public function searchWithAPlural ($searchData1,$searchData2){
        $I= $this ->tester;
        $I->fillField(self::$searchField,$searchData1);
        $I->click(self::$searchButton);
        $I->waitForElementVisible(self::$search1Result);
        $I->waitForElementNotVisible(self::$search1InvalidResult);
        $I->fillField(self::$searchField,$searchData2);
        $I->click(self::$searchButton);
        $I->waitForElementVisible(self::$search1Result);
        $I->waitForElementNotVisible(self::$search1InvalidResult);
    }

    public static $resultInfo = '//*[@id="resInfo-0"]';

    public function searchLegalTermReturnFewResults ($searchData1,$results)
    {
        $I= $this ->tester;
        $I->fillField(self::$searchField,$searchData1);
        $I->click(self::$searchButton);
        $I->waitForElement(self::$resultInfo);
        $I->see($results, self::$resultInfo);


    }

/////////
// Best Selling Product One: Mountfield HP454 Petrol Rotary Hand-Propelled Lawnmower (Special Offer)
//Main Page                                 //*[@class="item1"]/a[contains(text(),"Lawn mowers")]
 //   public static $lawnMowersDropDown = '//*[@class="product-navigation"]//a[contains(text(),"Lawn mowers")]';
    public static $lawnMowersDropDown = '//a[@href="/lawn-mowers/"]';

    public static $petrolFourWheelLawnMowers = '//*[@class="product-navigation"]//a[contains(text(),"Petrol Four Wheel Lawn Mowers ")]';
    public static $petrolLawnMowers = '//*[@class="product-navigation"]//a[contains(text(),"Petrol Lawn Mowers")]';
    public static $h1 = '//h1';






    public function goToPetrolFourWheelLawnMowersPage (){
        $I = $this->tester;
        try {
            $I->waitForElementVisible(self::$lawnMowersDropDown);
            $I->moveMouseOver(self::$lawnMowersDropDown);
            $I->waitForElementVisible(self::$petrolFourWheelLawnMowers);
            $I->click(self::$petrolFourWheelLawnMowers);
        }
        catch(Exception $e){
            $I->amOnPage('/lawn-mowers/petrol-lawnmowers/petrol-four-wheel-rotary-lawn-mowers');
            $I->waitForElement(self::$h1);
            $I->see('Petrol Four Wheel Rotary Lawn Mowers', self::$h1);
        }
    }

// Petrol Four Wheel Rotary Lawn Mowersk
    public static $push4PetrolLawnMowersBlock = './/*[@ alt="Push 4-Wheel Petrol Lawn Mowers"]';
    public static $mountFieldPush4WheelPetrolLawnMowers = './/*[@alt="Self-Propelled 4-Wheel Petrol Lawn Mowers"]';
    public static $mountFieldLogo = './/*[@alt="Mountfield Push 4-Wheel Petrol Lawn Mowers"]';
    public static $sellingProductOneMoreLink = '//a[@title="Mountfield HP454 Petrol Rotary Hand-Propelled Lawnmower (Special Offer)"]/../../../div/a[@class="more"]';
    public static $sellingProductOneLessLink = '//a[@title="Mountfield HP454 Petrol Rotary Hand-Propelled Lawnmower (Special Offer)"]/../../../div/a[@class="less"]';
    public static $sellingProductOneLink = '//h2/a[@title="Mountfield HP454 Petrol Rotary Hand-Propelled Lawnmower (Special Offer)"]';

        public function bestSellingProductOne(){
            $I = $this->tester;
            $I->click(self::$push4PetrolLawnMowersBlock);
            $I->waitForElementVisible(self::$mountFieldLogo);
            $I->click(self::$mountFieldLogo);
            $I->waitForElementVisible(self::$sellingProductOneMoreLink);
            $I->see('Mountfield Push 4-Wheel Petrol Lawn Mowers',self::$h1);
            $I->scrollTo(self::$sellingProductOneMoreLink);
            $I->click(self::$sellingProductOneMoreLink);
            $I->waitForElement(self::$sellingProductOneLessLink);
            $I->click(self::$sellingProductOneLink);
            $I->waitForElement(self::$productTabsBlock);
            $I->see('Mountfield HP454 Petrol Rotary Hand-Propelled Lawnmower (Special Offer)',self::$h1);
    }

// Best Selling Product Two: Einhell GC-SC 2240P Petrol Lawn Scarifier (Special Offer)
//Main Page                             //*[@class="item3"]/a[contains(text(),"Lawn care")]
    public static $lawnCareDropDown = '//a[contains(text(),"Lawn care")]';
    public static $petrolScarifiersPage = '//a[contains(text(),"Petrol Scarifiers")]';

    public function goToPetrolScarifiersPage (){
        $I = $this->tester;
    try {
        $I->moveMouseOver(self::$lawnCareDropDown);
        $I->waitForElementVisible(self::$petrolScarifiersPage);
        $I->click(self::$petrolScarifiersPage);
        $I->waitForElement(self::$h1);
        $I->see('Aerator and Scarifier Deals',self::$h1);
    } catch (Exception $e){
        $I->amOnPage('/lawn-care/aerators-and-scarifiers/all-deals-3336/as-filter-power-source/petrol');
        $I->waitForElement(self::$h1);
        $I->see('Aerator and Scarifier Deals',self::$h1);
        }
    }

    public static $sellingProductSecondMoreLink = '//a[@title="Einhell GC-SC 2240P Petrol Lawn Scarifier (Special Offer)"]/../../../div/a[@class="more"]';
    public static $sellingProductSecondLessLink = '//a[@title="Einhell GC-SC 2240P Petrol Lawn Scarifier (Special Offer)"]/../../../div/a[@class="less"]';
    public static $sellingProductSecondLink = '//h2/a[@title="Einhell GC-SC 2240P Petrol Lawn Scarifier (Special Offer)"]';


    public function bestSellingProductSecond(){
        $I = $this->tester;
        $I->waitForElementVisible(self::$sellingProductSecondLink);
        $I->scrollTo(self::$sellingProductSecondMoreLink);
        $I->click(self::$sellingProductSecondMoreLink);
        $I->waitForElement(self::$sellingProductSecondLessLink);
        $I->click(self::$sellingProductSecondLink);
        $I->waitForElement(self::$productTabsBlock);
        $I->see('Einhell GC-SC 2240P Petrol Lawn Scarifier (Special Offer)',self::$h1);

    }

//Best Selling Product Three: Mountfield SP533 Self-propelled Petrol Lawn Mower (Special Offer)
//Main Page

    public static $sellingProductThreeMoreLink = '//a[@title="Mountfield SP533 Self-propelled Petrol Lawn Mower (Special Offer)"]/../../../div/a[@class="more"]';
    public static $sellingProductThreeLessLink = '//a[@title="Mountfield SP533 Self-propelled Petrol Lawn Mower (Special Offer)"]/../../../div/a[@class="less"]';
    public static $sellingProductThreeLink = '//h2/a[@title="Mountfield SP533 Self-propelled Petrol Lawn Mower (Special Offer)"]';

    //h2/a[@title="Mountfield SP180 Self-Propelled Petrol Lawn Mower (Exclusive Special Offer)"]


// Self-Propelled 4-Wheel Petrol Lawn Mowers Page
    public static $selfMountFieldLogo = '//*[@alt="Mountfield Self Propelled Lawn Mowers"]';

    public function bestSellingProductThree(){
        $I = $this->tester;
        $I->click(self::$mountFieldPush4WheelPetrolLawnMowers);
        $I->waitForElementVisible(self::$selfMountFieldLogo);
        $I->see('Self-Propelled 4-Wheel Petrol Lawn Mowers',self::$h1);
        $I->click(self::$selfMountFieldLogo);
        $I->waitForElementVisible(self::$sellingProductThreeLink);
        $I->see('Mountfield Self Propelled Lawn Mowers',self::$h1);
        $I->scrollTo(self::$sellingProductThreeMoreLink);
        $I->click(self::$sellingProductThreeMoreLink);
        $I->waitForElement(self::$sellingProductThreeLessLink);
        $I->click(self::$sellingProductThreeLink);
        $I->waitForElement(self::$productTabsBlock);
        $I->see('Mountfield SP533 Self-propelled Petrol Lawn Mower (Special Offer)',self::$h1);

    }

// Best Selling Product Four: Oleo-Mac G53-TK AllRoad Plus-4 Self-Propelled Lawn Mower (Special Offer)
//Lawn Mowers page
    public static $petrolLawnMowersBlock ='//*[@alt="Petrol Lawn Mowers"]';


  // Petrol Lawn Mowers Page
    public static $petrolFourWhellRotaryLawnMowersBlock = '//*[@class="subcat_container petrol-four-wheel-rotary-lawn-mowers"]/h3/a';
    // Petrol Four Whell Rotary Lawn Mowers
    public static $SelfPropelled4WheelPetrolLawnMowersBlock = '//*[@alt="Self-Propelled 4-Wheel Petrol Lawn Mowers"]';

    //Self-Propelled 4-Wheel Petrol Lawn Mowers page
    public static $tabbedPanel = '.product-collateral';
    public static $lawnSizeTab = '//*[@class="current"]/span';
    public static $cuttingTab ='//*[@class = "toggle-tabs"]//span[contains(text(),"Cutting Width")]';
    public static $cuttingWidthInfoTab = '//*[@id="collateral-tabs"]/dd[2]//li';
    public static $priceTab = '//*[@class = "toggle-tabs"]//span[contains(text(),"Price")]';
    public static $priceInfoTab = '//*[@id="collateral-tabs"]/dd[3]//li';
    public static $bestSellingTab = '//*[@class = "toggle-tabs"]//span[contains(text(),"Best Sellers")]';
    public static $bestSellingInfoTab = '//*[@id="collateral-tabs"]/dd[4]//li';
   // public static $bestSellingOleoMacG53Product = '//h2/a[contains(text(),"Oleo-Mac G53-TK AllRoad Plus-4 Self-Propelled")]';
    public static $bestSellingProduct3 = '//*[@id="md-recommendations"]/div[3]/div[1]';
    // Product page
    public static $productTabsBlock = '//*[@class="toggle-tabs"]';

    public function goToLawnMowersPage ()
    {
        $I = $this->tester;
        $I->waitForElement(self::$lawnMowersDropDown);
        $I->click(self::$lawnMowersDropDown);
        $I->see('Lawn Mowers', self::$h1);
    }

    public function bestSellingProductFour ()   {
        $I = $this->tester;
        $I->waitForElementVisible(self::$petrolLawnMowersBlock);
        $I->click(self::$petrolLawnMowersBlock);
        $I->waitForElementVisible(self::$petrolFourWhellRotaryLawnMowersBlock);
        $I->see('Petrol Lawn Mowers',self::$h1);
        $I->click(self::$petrolFourWhellRotaryLawnMowersBlock);
        $I->waitForElementVisible(self::$SelfPropelled4WheelPetrolLawnMowersBlock);
        $I->see('Petrol Four Wheel Rotary Lawn Mowers',self::$h1);
        $I->click(self::$SelfPropelled4WheelPetrolLawnMowersBlock);
        $I->waitForElement(self::$tabbedPanel);
        $I->scrollTo(self::$tabbedPanel);
        $I->click(self::$cuttingTab);
        $I->waitForElementVisible(self::$cuttingWidthInfoTab);
        $I->click(self::$priceTab);
        $I->waitForElementVisible(self::$priceInfoTab);
        $I->click(self::$bestSellingTab);
        $I->waitForElementVisible(self::$bestSellingInfoTab);
        $I->click(self::$bestSellingProduct3);
        $I->waitForElement(self::$productTabsBlock);
    }

// Best Selling Product Five: Mountfield SP180 Self-Propelled Petrol Lawn Mower (Exclusive Special Offer)

// cutting Width
    public static $cutting4546cm = '//*[@title=\'45-46cm (18")\']';

// Cutting 45-46 Filter Page
    public static $MountFieldSP180SelfPropelledPetrolLawnMoreLink  = '//a[@title="Mountfield SP180 Self-Propelled Petrol Lawn Mower (Exclusive Special Offer)"]/../../../div/a[@class="more"]';
    public static $MountFieldSP180SelfPropelledPetrolLawnLessLink = '//a[@title="Mountfield SP180 Self-Propelled Petrol Lawn Mower (Exclusive Special Offer)"]/../../../div/a[@class="less"]';
    public static $MountFieldSP180SelfPropelledPetrolLawnLink = '//h2/a[@title="Mountfield SP180 Self-Propelled Petrol Lawn Mower (Exclusive Special Offer)"]';


    public function bestSellingProductFive ()    {
        $I = $this->tester;
        $I->waitForElementVisible(self::$petrolLawnMowersBlock);
        $I->click(self::$petrolLawnMowersBlock);
        $I->waitForElementVisible(self::$petrolFourWhellRotaryLawnMowersBlock);
        $I->see('Petrol Lawn Mowers', self::$h1);
        $I->click(self::$petrolFourWhellRotaryLawnMowersBlock);
        $I->waitForElementVisible(self::$SelfPropelled4WheelPetrolLawnMowersBlock);
        $I->see('Petrol Four Wheel Rotary Lawn Mowers', self::$h1);
        $I->click(self::$SelfPropelled4WheelPetrolLawnMowersBlock);
        $I->waitForElement(self::$tabbedPanel);
        $I->scrollTo(self::$tabbedPanel);
        $I->click(self::$cuttingTab);
        $I->waitForElementVisible(self::$cutting4546cm);
        $I->click(self::$cutting4546cm);
        $I->waitForElementVisible(self::$MountFieldSP180SelfPropelledPetrolLawnMoreLink);
        $I->click(self::$MountFieldSP180SelfPropelledPetrolLawnMoreLink);
        $I->waitForElementVisible(self::$MountFieldSP180SelfPropelledPetrolLawnLessLink);
        $I->click(self::$MountFieldSP180SelfPropelledPetrolLawnLink);
        $I->waitForElement(self::$productTabsBlock);
        $I->see('Mountfield SP180 Self-Propelled Petrol Lawn Mower (Exclusive Special Offer)', self::$h1);

    }


// Best Selling Product Six: Mountfield 1530M Lawn Tractor
//Main Page //*[@class="item2"]/a[contains(text(),"Lawn Tractors")]
    public static $lawnTractorDropDown = '//*[@class="product-navigation"]/ul/li[2]/a[contains(text(),"Lawn Tractors")]';
    public static $brushcuttersDropDown = '//*[@class="product-navigation"]//li[4]/a[contains(text(),"Brushcutters")]';
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
        $I->see('Lawn & Garden Tractors', self::$h1);
    }

    public function goToBrushcuttersPage (){
        $I = $this->tester;
        $I->waitAndclick(self::$brushcuttersDropDown);
        $I->waitForElement(self::$h1);
        $I->see('Brushcutters, Strimmers, Line Trimmers',self::$h1);
    }

    public function goToHedgetrimmersPage(){
        $I = $this->tester;
        $I->waitAndclick(self::$hedgetrimmersDropDown);
        $I->waitForElement(self::$h1);
        $I->see('Hedgetrimmers & Hedgecutters',self::$h1);
    }

    public function goToChainsawsPage(){
        $I = $this->tester;
        $I->waitAndclick(self::$chainsawsDropDown);
        $I->waitForElement(self::$h1);
        $I->see('Chainsaws',self::$h1);
    }

    public function goToVacsBlowersPage(){
        $I = $this->tester;
        $I->waitAndclick(self::$vacsBlowersDropDown);
        $I->waitForElement(self::$h1);
        $I->see('Garden Vacuums, Leaf Blowers & Sweepers',self::$h1);
    }

    public function goToTillersPage(){
        $I = $this->tester;
        $I->waitAndclick(self::$tillersDropDown);
        $I->waitForElement(self::$h1);
        $I->see('Cultivators, Tillers & Rotavators',self::$h1);
    }

    public function goToMorePage(){
        $I = $this->tester;
        $I->waitAndclick(self::$moreDropDown);
        $I->waitForElement(self::$h1);
        $I->see('Other Garden Machinery',self::$h1);
    }


    public static $MountField1530MLawnTractorMoreLink  = '//a[@title="Mountfield 1530M Lawn Tractor"]/../../../div/a[@class="more"]';
    public static $MountField1530MLawnTractorLessLink = '//a[@title="Mountfield 1530M Lawn Tractor"]/../../../div/a[@class="less"]';
    public static $MountField1530MLawnTractorLink = '//a[@title="Mountfield 1530M Lawn Tractor"]';

    //a[@title="Mountfield 1530M Lawn Tractor"]

    public function bestSellingProductSix () {
        $I = $this->tester;
        $I->click(self::$lawnTractorsBlock);
        $I->waitForElement(self::$MountFieldLawnTractorLogo);
        $I->click(self::$MountFieldLawnTractorLogo);
        $I->waitForElementVisible(self::$MountField1530MLawnTractorMoreLink);
        $I->see('Mountfield Lawn Tractors',self::$h1);
        $I->scrollTo(self::$MountField1530MLawnTractorMoreLink);
        $I->click(self::$MountField1530MLawnTractorMoreLink);
        $I->waitForElementVisible(self::$MountField1530MLawnTractorLessLink);
        $I->click(self::$MountField1530MLawnTractorLink);
        $I->waitForElement(self::$productTabsBlock);
        $I->see('Mountfield 1530M Lawn Tractor',self::$h1);
    }

////////////////////////////////// T1535 Use the category navigation to navigate to the Various Category Marketing Pages
/// Lawn Mowers Page

    public static $petrolRealRollerRotary = '//*[@alt="Petrol Rear Roller Rotary Lawnmowers"]';
    public static $panelMainsElectricLawnMowers = '//*[@alt="Mains-Electric Lawn Mowers"]';

    public function goToPetrolLawnMowersFromLawnMowerPage ()    {
        $I = $this->tester;
        $I->waitForElementVisible(self::$petrolLawnMowersBlock);
        $I->waitAndClick(self::$petrolLawnMowersBlock);
        $I->waitForElementVisible(self::$petrolFourWhellRotaryLawnMowersBlock);
        $I->see('Petrol Lawn Mowers', self::$h1);
    }

    public function goToMainsElectricLawnMowersPage (){
        $I = $this->tester;
        $I->waitAndClick(self::$panelMainsElectricLawnMowers);
        $I->waitForElement(self::$h1);
        $I->see('Mains-Electric Lawn Mowers', self::$h1);
    }

    // Petrol Lawn Mowers Page
    public static  $petrolFourWheelRotaryLawnMowers = '//*[@alt="Petrol Four Wheel Rotary Lawn Mowers"]';

    public function goToPetrolFourWheelRotaryLawnMowersFromPetrolLawnMowersPage ()    {
        $I = $this->tester;
        $I->waitAndClick(self::$petrolFourWheelRotaryLawnMowers);
        $I->waitForElement(self::$h1);
        $I->see('Petrol Four Wheel Rotary Lawn Mowers', self::$h1);
    }

    // Petrol Four Wheel Rotary Lawn Mowers Page
    public static $panelSelfPropelled4WheelPetrolLawnMowers = '//*[@ alt="Self-Propelled 4-Wheel Petrol Lawn Mowers"]';
    public static $panelPush4WheelPetrolLawnMowers = '//*[@alt="Push 4-Wheel Petrol Lawn Mowers"]';

    public function goToSelfPropelled4WheelPetrolLawnMowersPage ()    {
        $I = $this->tester;
        $I->waitAndClick(self::$panelSelfPropelled4WheelPetrolLawnMowers);
        $I->waitForElement(self::$h1);
        $I->see('Self-Propelled 4-Wheel Petrol Lawn Mowers', self::$h1);
    }


    public static $returnToPetrolFourWheelRotaryLawnLink = '//a[contains(text(),"Petrol Four Wheel Rotary Lawn Mowers")]';

    public function returnToPetrolFourWheelRotaryLawnPage(){
        $I = $this->tester;
        $I->waitAndClick(self::$returnToPetrolFourWheelRotaryLawnLink);
        $I->waitForElement(self::$h1);
        $I->see('Petrol Four Wheel Rotary Lawn Mowers', self::$h1);
    }

// 4-Wheel Petrol Lawn Mowers


    public function goToPush4WheelPetrolLawnMowersPage(){
        $I = $this->tester;
        $I->waitAndClick(self::$panelPush4WheelPetrolLawnMowers);
        $I->waitForElement(self::$h1);
        $I->see('Push 4-Wheel Petrol Lawn Mowers', self::$h1);
    }

// Mains-Electric Lawn Mowers Page
    public static $panelElectricRearRollerRotaryLawnMowers = '//*[@alt="Electric Rear-Roller Rotary Lawn Mowers"]';


    public function goToElectricRearRollerRotaryLawnMowersPage(){
        $I = $this->tester;
        $I->waitAndClick(self::$panelElectricRearRollerRotaryLawnMowers);
        $I->waitForElement(self::$h1);
        $I->see('Electric Rear-Roller Rotary Lawn Mowers', self::$h1);
    }

    public static $panelElectricFourWheelRotaryLawnMowers  = '//*[@alt="Electric Four-Wheel Rotary Lawn Mowers"]';

    public function goToElectricFourWheelRotaryLawnMowersPage(){
        $I = $this->tester;
        $I->waitAndClick(self::$panelElectricFourWheelRotaryLawnMowers);
        $I->waitForElement(self::$h1);
        $I->see('Electric Four-Wheel Rotary Lawn Mowers', self::$h1);
    }

// Electric Rear-Roller Rotary Lawn Mowers page
    public static $returnMainsElectricLawnMowersPage = '//a[contains(text(),"Mains-Electric Lawn Mowers")]';

    public function returnMainsElectricLawnMowersPage (){
        $I = $this->tester;
        $I->waitAndClick(self::$returnMainsElectricLawnMowersPage);
        $I->waitForElement(self::$h1);
        $I->see('Mains-Electric Lawn Mowers', self::$h1);
    }

/// Lawn Tractors

    public static $panelRideOnMowers = '//*[@alt="Ride-On Mowers (Rear-Engine)"]';
    public static $panelLawnMower = '//*[@alt="Lawn Tractors"]';
    public static $gardenTractors = '//*[@alt="Garden Tractors"]';

    public function goToRideOnMowersPage(){
        $I = $this->tester;
        $I->waitAndClick(self::$panelRideOnMowers);
        $I->waitForElement(self::$h1);
        $I->see('Ride-On Mowers (Rear-Engine)', self::$h1);
    }

    public function goToLawnMowersPanelPage(){
        $I = $this->tester;
        $I->waitAndClick(self::$panelLawnMower);
        $I->waitForElement(self::$h1);
        $I->see('Lawn Tractors', self::$h1);
    }

    public function goToGardenTractorsPage(){
        $I = $this->tester;
        $I->waitAndClick(self::$gardenTractors);
        $I->waitForElement(self::$h1);
        $I->see('Garden Tractors', self::$h1);

    }

// Brushcutters, Strimmers, Line Trimmers Page

    public static  $panelPetrolBrushcuttersAndLineTrimmers = '//*[@alt="Petrol Brushcutters & Line Trimmers"]';

    public function goToPetrolBrushcuttersAndLineTrimmersPage(){
        $I = $this->tester;
        $I->waitAndClick(self::$panelPetrolBrushcuttersAndLineTrimmers);
        $I->waitForElement(self::$h1);
        $I->see('Petrol Brushcutters & Line Trimmers', self::$h1);
    }

// Hedgetrimmers Page

    public static $panelPetrolHedgecutters = '//*[@alt="Petrol Hedgecutters"]';
    public static $panelElectricHedgetrimmers = './/*[@alt="Electric Hedgetrimmers"]';

    public function goToPetrolHedgecuttersPage(){
        $I = $this->tester;
        $I->waitAndClick(self::$panelPetrolHedgecutters);
        $I->waitForElement(self::$h1);
        $I->see('Petrol Hedgecutters', self::$h1);
    }

    public static $returnHedgetrimmersHedgecuttersPage = '//a[contains(text(),"Hedgetrimmers & Hedgecutters")]';

    public function returnHedgetrimmersHedgecuttersPage (){
        $I = $this->tester;
        $I->waitAndClick(self::$returnHedgetrimmersHedgecuttersPage);
        $I->waitForElement(self::$h1);
        $I->see('Hedgetrimmers & Hedgecutters', self::$h1);
    }

    public function goToElectricHedgetrimmersPage (){
        $I = $this->tester;
        $I->waitAndClick(self::$panelElectricHedgetrimmers);
        $I->waitForElement(self::$h1);
        $I->see('Electric Hedgetrimmers', self::$h1);
    }

// ChainSaws Page

    public static $panelPetrolChainsaws  = '//*[@alt="Petrol Chainsaws"]';
    public static $panelElectricChainsaws = './/*[@alt="Electric Chainsaws"]';

    public function goToPetrolChainsawsPage (){
        $I = $this->tester;
        $I->waitAndClick(self::$panelPetrolChainsaws);
        $I->waitForElement(self::$h1);
        $I->see('Petrol Chainsaws', self::$h1);
    }

    public static $returnChainsawsPage = '//*[@id="top"]//a[contains(text(),"Chainsaws")]';

    public function returnChainsawsPage(){
        $I = $this->tester;
        $I->waitAndClick(self::$returnChainsawsPage);
        $I->waitForElement(self::$h1);
        $I->see('Chainsaws', self::$h1);
    }

    public function goToElectricChainsawsPage(){
        $I = $this->tester;
        $I->waitAndClick(self::$panelElectricChainsaws);
        $I->waitForElement(self::$h1);
        $I->see('Electric Chainsaws', self::$h1);
    }


// Vacs & Blowers page

    public static $panelHandHeldGardenBlowerVacs = '//*[@alt="Hand Held Garden Blower-Vacs"]';
    public static $panelBackpackPowerLeafBlowers = '//*[@alt="Backpack Power Leaf Blowers"]';
    public static $panelWheeledLawnLitterVacuumsAndLeafSweepers = '//*[@alt="Wheeled Lawn & Litter Vacuums and Leaf Sweepers"]';

    public function goToHandHeldGardenBlowerVacsPage(){
        $I = $this->tester;
        $I->waitAndClick(self::$panelHandHeldGardenBlowerVacs);
        $I->waitForElement(self::$h1);
        $I->see('Hand Held Garden Blower-Vacs', self::$h1);
    }

    public static $returnGardenVacuumsLeafBlowersSweepers = '//*[@id="top"]//a[contains(text(),"Garden Vacuums, Leaf Blowers & Sweepers")]';

    public function returnGardenVacuumsLeafBlowersSweepersPage(){
        $I = $this->tester;
        $I->waitAndClick(self::$returnGardenVacuumsLeafBlowersSweepers);
        $I->waitForElement(self::$h1);
        $I->see('Garden Vacuums, Leaf Blowers & Sweepers', self::$h1);
    }

    public function goToBackpackPowerLeafBlowersPage(){
        $I = $this->tester;
        $I->waitAndClick(self::$panelBackpackPowerLeafBlowers);
        $I->waitForElement(self::$h1);
        $I->see('Backpack Power Leaf Blowers', self::$h1);
    }

    public function goToWheeledLawnLitterVacuumsAndLeafSweepersPage(){
        $I = $this->tester;
        $I->waitAndClick(self::$panelWheeledLawnLitterVacuumsAndLeafSweepers);
        $I->waitForElement(self::$h1);
        $I->see('Wheeled Lawn & Litter Vacuums and Leaf Sweepers', self::$h1);
    }

//// More Pages
//
    public static $panelGardenChippersShredders = '//*[@ alt="Garden Chippers & Shredders"]';
    public static $panelFirewoodTools = '//*[@alt="Firewood Tools"]';

    public function goToGardenChippersShreddersPage(){
        $I = $this->tester;
        $I->waitAndClick(self::$panelGardenChippersShredders);
        $I->waitForElement(self::$h1);
        $I->see('Garden Chippers & Shredders', self::$h1);
    }

    public function goToFirewoodToolsPage(){
        $I = $this->tester;
        $I->waitAndClick(self::$panelFirewoodTools);
        $I->waitForElement(self::$h1);
        $I->see('Firewood Tools', self::$h1);
    }

// Garden Chippers Shredders Page

    public static $panelElectricGardenShredder = '//*[@alt="Electric Garden Shredders"]';
    public static $panelPetrolChipperShredders = '//*[@alt="Petrol Chipper-Shredders"]';
    public static $panelSnowCleaners = '//*[@alt="Snow Clearance"]';



    public function goToElectricGardenShredderPage(){
        $I = $this->tester;
        $I->waitAndClick(self::$panelElectricGardenShredder);
        $I->waitForElement(self::$h1);
        $I->see('Electric Garden Shredders', self::$h1);
    }

    public function goToPetrolChipperShreddersPage(){
        $I = $this->tester;
        $I->waitAndClick(self::$panelPetrolChipperShredders);
        $I->waitForElement(self::$h1);
        $I->see('Petrol Chipper-Shredders', self::$h1);
    }

    public function goToSnowClearancePage(){
        $I = $this->tester;
        $I->waitAndClick(self::$panelSnowCleaners);
        $I->waitForElement(self::$h1);
        $I->see('Snow Clearance', self::$h1);
    }


// Electric Garden Shredders Page
    public static $returnGardenChippersShredders = '//*[@id="top"]//a[contains(text(),"Garden Chippers & Shredders")]';

    public function returnGardenChippersShreddersPage(){
        $I = $this->tester;
        $I->waitAndClick(self::$returnGardenChippersShredders);
        $I->waitForElement(self::$h1);
        $I->see('Garden Chippers & Shredders', self::$h1);
    }

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
        $I->see('Snow Throwers / Snow Blowers', self::$h1);
    }





}