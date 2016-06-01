<?php
namespace Step\Acceptance;

use Exception;

class CheckoutSteps extends \AcceptanceTester
{

    /**
     * Tractor
     */

    public function addToBasketTractor(){
        $I = $this;
        $I->waitForElement('//nav[@class="product-navigation"]/ul/li[2]');
        $I->moveMouseOver('//nav[@class="product-navigation"]/ul/li[2]');
        $I->waitForElementVisible('//div[@class="category"]//ul//a');
        $I->click('//div[@class="category"]//ul//a');
        $I->waitForElement('//div[@class="category-products"]');
        $I->waitForElement('//p[@class="action"]/button');
        $I->click('//p[@class="action"]/button');
        $I->waitForElement('//li[@class="success-msg"]');
        $I->see('was added to your shopping cart.','//li[@class="success-msg"]');

    }

    public function purchaseOtherItem()
    {
        $I = $this;
        $I->waitForElement('//nav[@class="product-navigation"]/ul/li[4]');
        $I->moveMouseOver('//nav[@class="product-navigation"]/ul/li[4]');
        $I->waitForElementVisible('//li[@class="item4 active"]/nav/div[4]//ul//a');
        $I->click('//li[@class="item4 active"]/nav/div[4]//ul//a');
        $I->waitForElement('//div[@class="md-product-essential-main"]');
        $I->waitForElement('//div[@class="add-to-cart-buttons"]');
        $I->click('//div[@class="add-to-cart-buttons"]');
        $I->waitForElement('//li[@class="success-msg"]');
        $I->see('was added to your shopping cart.','//li[@class="success-msg"]');
        $I->waitForElement('//tr[@class="last even"]');

    }


    /**
     * Mower
     */

    public function addToBasketMower(){
        $I = $this;
        $I->waitForElement('//nav[@class="product-navigation"]/ul/li[1]');
        $I->moveMouseOver('//nav[@class="product-navigation"]/ul/li[1]');
        $I->waitForElementVisible('//div[@class="category wide"]//li[5]/a');
        $I->click('//div[@class="category wide"]//li[5]/a');
        $I->waitForElement('//div[@class="category-products"]');
        $I->waitForElement('//p[@class="action"]/button');
        $I->click('//p[@class="action"]/button');
        $I->waitForElement('//li[@class="success-msg"]');
        $I->see('was added to your shopping cart.','//li[@class="success-msg"]');

    }

    /**
     * Brand
     */

    public function selectBrandFlymo()
    {
        $I = $this;
        $I->waitForElement('//nav[@class="product-navigation"]/ul/li[11]');
        $I->moveMouseOver('//nav[@class="product-navigation"]/ul/li[11]');
        $I->waitForElement('//nav[@class="brand-lists"]//div//div');
        $I->waitForElementVisible('//a[@href="/flymo"]');
        $I->click('//a[@href="/flymo"]');
        $I->waitForText('Flymo');
    }

    public function selectBrandTwoBrands()
    {
        $I = $this;
        $this->selectBrandFlymo();
        $I->waitForElement('//div[@class="subcat_container"]/h3[text()="Flymo Grass Trimmers"]');
        $I->click('//*[@class="category-collateral"]/div[5]/div');
        $I->waitForElement('//p[@class="action"]/button');
        $I->click('//p[@class="action"]/button');
        $I->waitForElement('//li[@class="success-msg"]');
        $I->see('was added to your shopping cart.','//li[@class="success-msg"]');


        $this->selectBrandFlymo();
        $I->waitForElement('//div[@class="subcat_container"]/h3[text()="Flymo Vacs & Blowers"]');
        $I->click('//*[@class="category-collateral"]/div[6]/div');
        $I->waitForElement('//p[@class="action"]/button');
        $I->click('//p[@class="action"]/button');
        $I->waitForElement('//li[@class="success-msg"]');
        $I->see('was added to your shopping cart.','//li[@class="success-msg"]');
        $I->waitForElement('//tr[@class="last even"]');
        $I->fillField('//tr[@class="last even"]/td[4]/input','2');
        $I->click('//tr[@class="last even"]/td[4]/button');
        $I->getVisibleText('2', '//tr[@class="last even"]/td[4]/input');

    }





}