<?php
namespace Page;


class CategoryNavigation
{

    public static $URL = 'http://testing:Da1mat1an5@testupgrade.ee12test.mowdirect.co.uk/';
    public static $waitDeals = '//nav[@class="product-navigation"]/ul/li[10]';
    public static $moveDeals = '//nav[@class="product-navigation"]/ul/li[10]';
    public static $top10 = '//li[@class="item10 active"]//nav/div[4]//li/a[text()="Top 10 Hedgetrimmer Deals"]';
    public static $category = '//div[@class="category-products"]';
    public static $amount = '//p[@class="amount amount--no-pages"]/strong[text()="10 Item(s)"]';




    protected $tester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }



    public function home()
    {
        $I = $this->tester;
        $I->amOnUrl(self::$URL);

    }

    public function checkTop10()
    {
        $I = $this->tester;
        $I->waitForElement(self::$waitDeals);
        $I->moveMouseOver(self::$moveDeals);
        $I->waitForElementVisible(self::$top10);
        $I->click(self::$top10);
        $I->waitForElement(self::$category);
        $I->waitForElement(self::$amount);





    }





}