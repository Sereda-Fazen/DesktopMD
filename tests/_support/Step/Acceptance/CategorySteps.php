<?php
namespace Step\Acceptance;


use Exception;

/**
 * @property  assertGreaterOrEquals
 */
class CategorySteps extends \AcceptanceTester
{

    public function fullRange(){
        $I = $this;
        $I->click('//div[@class="category-collateral lawn-garden-tractors"]/div[' . rand(1, 2) . ']/div');
        $I->waitForElement('//*[@title="See our Full Range"]');
        $I->click('.curved.shadow.shop-now');
    }

    public function randomPanel ()
    {
        $I = $this;
        $topShow = '//div[@class="toolbar"]/div[@class="pager"]//select';
        $bottomShow = '//div[@class="toolbar-bottom"]//div[@class="pager"]//select';

        $I->waitForElement('#top-limiter');
        $I->selectOption('#top-limiter', '25');
        $I->waitForAjax(10);
        $I->see('25', $topShow);
        $I->seeNumberOfElements('#products-list>li', [10,25]);
        $I->see('25',$bottomShow);

        $I->selectOption('#top-limiter', '50');
        $I->waitForAjax(10);
        $I->see('50', $topShow);
        $I->seeNumberOfElements('#products-list>li', [10,50]);
        $I->see('50',$bottomShow);

        $I->selectOption('#top-limiter', '10');
        $I->waitForAjax(10);
        $I->see('10', $topShow);
        $I->seeNumberOfElements('#products-list', [0,10]);
        $I->see('10',$bottomShow);
    }

    public function sortBy(){
        $I = $this;
        self::fullRange();
        $I->selectOption('//div[@class="sort-by"]//select', 'Name' );
        $I->waitForAjax(10);
        $I->see('Name', 'div.sort-by');



        $I->selectOption('//div[@class="sort-by"]//select', 'Price' );
        $I->waitForAjax(10);
        $I->see('Price', 'div.sort-by');
        $price = $I->grabTextFrom('//*[@class="products-list"]/li[1]/div[2]/div/div[2]/div//span');
        $price2 = $I->grabTextFrom('//*[@class="products-list"]/li[2]/div[2]/div/div[2]/div//span[@class="price"]');
        $pr = floatval(preg_replace("/[^0-9.]*/", '', $price));
        $pr2 = floatval(preg_replace("/[^0-9.]*/", '', $price2));

        $this->assertGreaterOrEquals($pr,$pr2);

        

        


        


        $I->waitForElement('.sort-by');



        //$I->selectOption('//div[@class="sort-by"]//select', 'Name' );
        //$I->waitForAjax(10);
        //$I->see('Name', 'div.sort-by');


/*
        $I->selectOption('//div[@class="sort-by"]//select', 'Price' );
        $I->waitForAjax(10);
        $I->see('Price', 'div.sort-by');
*/
    }





}