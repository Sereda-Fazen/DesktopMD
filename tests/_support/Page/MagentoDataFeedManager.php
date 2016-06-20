<?php
/**
 * Created by PhpStorm.
 * User: obana
 * Date: 17.06.16
 * Time: 17:43
 */

namespace Page;


class MagentoDataFeedManager
{

    public static $catalogDown = '//*[@class="nav-bar"]/ul/li[3]';
    public static $dataFeedManagerDropDown = '//*[@class="nav-bar"]/ul/li[3]/ul/li[11]/a/span';

// Static Banners Page
    public static $assertDataFeedManagerPage = '//*[@class="content-header"]//h3';


    protected $tester;
    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I; // подкл. конструктора
    }
    public function goToDataFeedManagerPage() {
        $I = $this->tester;
        $I ->moveMouseOver(self::$catalogDown);
        $I->waitForElement(self::$dataFeedManagerDropDown);
        $I->click(self::$dataFeedManagerDropDown);
        $I->waitForElement(self::$assertDataFeedManagerPage);
        $I->see('Data Feed Manager',self::$assertDataFeedManagerPage);
    }


/*
    public static $filterFileFormatSort = '//*[@class="headings"]//th[3]';
    public static $filterStoreViewOpt4 = '//*[@class="filter"]/th[5]//optgroup[2]/option';
   // public static $filterBannerNameField = '//*[@class="filter"]/th[3]//input';
    public static $filterSearchButton = '//*[@class="actions"]//button[2]';
    public static $filterBannersResult = '//*[@class="data"]/tbody//td[3]';
    public static $filterResetButton = '//*[@class="actions"]//td[2]/button[1]';

    public function variousFilter($bannerName,$IdFrom,$IdTo) {
        $I = $this->tester;
        $I->fillField(self::$filterBannerNameField,$bannerName);
        $I->click(self::$filterSearchButton);
        $I->waitForElementVisible(self::$filterBannersResult);
        $I->see($bannerName,self::$filterBannersResult);
        $I->wait(1);
        $I->click(self::$filterResetButton);
        $I->wait(1);
        $I->fillField(self::$filterIdFrom,$IdFrom);
        $I->fillField(self::$filterIdTo,$IdTo);
        $I->click(self::$filterSearchButton);
        $I->wait(1);
        $I->click(self::$filterSortBannerName);
        $I->wait(1);
        $I->click(self::$filterStoreViewOpt4);
        $I->click(self::$filterSearchButton);
        $I->wait(1);
    }
*/
}