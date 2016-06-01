<?php
namespace Step\Acceptance;

use Exception;

class CheckoutSteps extends \AcceptanceTester
{

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





}