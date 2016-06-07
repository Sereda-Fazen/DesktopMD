<?php
namespace Step\Acceptance;

use Exception;

class ProductsSteps extends \AcceptanceTester
{

    /**
     * Tractor layout
     */

    public function productsLayout(){
        $I = $this;

        $I->amOnPage('/');
        $I->waitForElement('//nav[@class="product-navigation"]/ul/li[2]');
        $I->moveMouseOver('//nav[@class="product-navigation"]/ul/li[2]');
        $I->waitForElementVisible('//li[@class="item2 active"]//nav/div[7]//li/a[text()="Trailers"]');
        $I->click('//li[@class="item2 active"]//nav/div[7]//li/a[text()="Trailers"]');
        $I->waitForElement('//div[@class="category-products"]');
        $I->waitForElement('//*[@class="item odd"]//a/img');
        $I->click('//*[@class="item odd"]//a/img');
        $I->scrollDown(200);
        $I->waitForElement('//*[@class="toggle-tabs"]');
        $count = count($I->grabMultiple('//*[@class="toggle-tabs"]/li'));
        for ($l = 1; $l <=$count; $l++){
            $I->click('//*[@class="toggle-tabs"]/li['.$l.']');

            switch ($l){
                case 1:
                    $I->waitForElement('//*[@class="product-attributes-container"]');
                    break;
                case 2:
                    $I->waitForElement('//*[@class="tab-container current"]');
                    break;
                case 3:
                    $I->waitForElement('//*[@class="tab-container current"]');
                    break;
                case 4:
                    $I->waitForElement('//*[@class="tab-container last current"]');
                    break;
            }
        }


        $I->scrollUp(200);
        

    }







}