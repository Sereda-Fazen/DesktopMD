<?php
namespace Page;


use Exception;

class Checkout
{

    //login

    public static $loginForm = '//div[@class="col-2"]';
    public static $email = '#login-email';
    public static $pass = '#login-password';
    public static $submit = '//div[@class="col-2"]//button/span';
    
    
    
    public static $processCheckout = '//ul[@class="checkout-types top"]//button';
    public static $continue = '//div[@id="billing-buttons-container"]//button';
    public static $formList = '//ul[@class="form-list"]';
    public static $deliver = '//ul[@class="form-list"]/li[3]/label[text()="Deliver to this address"]';
    public static $differentAddress = '//ul[@class="form-list"]/li[4]/label[text()="Deliver to different address"]';

    //delivery

    public static $showDelivery = '//*[@class="section allow active"]';
    public static $useAddress = '#co-shipping-form > ul.form-list > li.control > label';
    public static $continue2 = '//div[@id="shipping-buttons-container"]//button';

    // delivery method


    public static $showMethod = '//li[@id="opc-shipping_method"]';
    public static $continue3 = '//li[@id="opc-shipping_method"]//button';

    //payment info

    public static $showPayment = '//li[@id="opc-payment"]';
    public static $continue4 = '//li[@id="opc-payment"]//button';
    public static $bankTransfer = '//*[@id="co-payment-form"]//dl/dt[2]/input';

    //order

    public static $showOrder = '//li[@id="opc-review"]';
    public static $yourOrder = '//*[@id="md-checkout-cart"]';
    public static $productTable = '//*[@id="checkout-review-table"]';
    public static $agree = '//p[@class="agree"]/input';

    public static $continue5 = '//li[@id="opc-review"]//button';

    // after order

    public static $seeOrder =  '//div[@class="page-title"]/h1';
    public static $keepContinue = '//div[@class="buttons-set"]/button';
    public static $mainPage = '//div[@class="page-header-container"]';


    // purchase optional

    public static $url = '/';
    public static $search = '#search';
    public static $clickSearch = '//button[@class="button search-button"]';
    public static $wait = '//div[@class="gsc-wrapper"]';
    public static $firstItem = '//div[@class="gsc-webResult gsc-result"]//a';
    public static $seeLink = '/lawnflite-703-rt-lawn-garden-tractor-ride-on-mower.html';
    public static $optional = '//div[@class="product-options"]';
    public static $input1 = '//dd[@class="last"]//li[1]/input';
    public static $input2 = '//dd[@class="last"]//li[2]/input';
    public static $input3 = '//dd[@class="last"]//li[3]/input';
    public static $input1Show = 'input.checkbox.change-container-classname.validation-passed';
    public static $input2Show = 'ul.options-list > li:nth-of-type(2) > input.checkbox.change-container-classname.validation-passed';
    public static $input3Show = 'ul.options-list > li:nth-of-type(3) > input.checkbox.change-container-classname.validation-passed';
    public static $addToCart = '//div[@class="add-to-cart-buttons"]/button';
    public static $specialProd = '//dl[@class="item-options"]/dt[text()="Exclusive Special Offer"]';
    public static $accessories = '//dl[@class="item-options"]//dd[text()="Free Lawnflite Trailer worth £199!                            "]';
    public static $move = '//*[@class="truncated"]';
    public static $waitAccessories = '//*[@class="truncated_full_value show"]';



    protected $tester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }


    public function loginInvalid($name, $password)
    {
        $I = $this->tester;
        $I->waitForElement(self::$loginForm);
        $I->fillField(self::$email, $name);
        $I->fillField(self::$pass, $password);
        $I->click(self::$submit);

        return $this;
    }


    /**
     * @param $name
     * @param $password
     */
    public function checkOrder($name, $password)
    {
        $I = $this->tester;
        $I->waitForElement(self::$processCheckout);
        $I->click(self::$processCheckout);
        try {
            self::loginInvalid($name, $password);
        } catch (Exception $e) {}
        
        $I->waitForText('Checkout');
        $I->getVisibleText('Billing Information');
        $I->seeElement(self::$formList);
        $I->seeElement(self::$deliver);
        $I->seeElement(self::$differentAddress);
        $I->waitForElement(self::$continue);
        $I->click(self::$continue);
        $I->waitForElementNotVisible('//*[@id="billing-please-wait"]');

        $I->waitForElement(self::$showDelivery);
        $I->waitForText('Delivery Information');
        $I->waitForElement(self::$useAddress);

        try {
            $I->waitForElement(self::$continue2);
            $I->click(self::$continue2);
        } catch (Exception $e) {}

        $I->waitForElement(self::$showMethod);
        $I->waitForText('Delivery Method');
        $I->waitForElementVisible(self::$continue3);
        $I->click(self::$continue3);

        $I->waitForElement(self::$showPayment);
        $I->waitForText('Payment Information');
        $I->waitForElementVisible(self::$continue4);
        $I->click(self::$continue4);
        try{
            $I->acceptPopup();
        } catch (Exception $e) {}


        $I->waitForElement(self::$bankTransfer);
        $I->click(self::$bankTransfer);
        $I->click(self::$continue4);

        $I->waitForElement(self::$showOrder);
        $I->waitForText('Order Review');
        $I->waitForElement(self::$yourOrder);
        $I->getVisibleText('YOUR SELECTION');
        $I->getVisibleText('INVOICE ADDRESS');
        $I->getVisibleText('DELIVERY ADDRESS');
        $I->getVisibleText('DELIVERY METHOD');
        $I->getVisibleText('PAYMENT METHOD');
        $I->getVisibleText('Cheque or Bank Transfer');
        $I->waitForElement(self::$productTable);
        $I->waitForElement(self::$agree);
        $I->click(self::$agree);

        $I->waitForElementVisible(self::$continue5);

        $I->click(self::$continue5);
        $I->waitForText('Your order has been received.',30);
        $I->see('Your order has been received.',self::$seeOrder);
        $I->getVisibleText('Thank you for your purchase!');
        $I->click(self::$keepContinue);
        $I->waitForElement(self::$mainPage);

        
    }

    public function purchaseTractorOption($optional){
        $I = $this->tester;
        $I->amOnPage(self::$url);
        $I->fillField(self::$search, $optional);
        $I->click(self::$clickSearch);
        $I->waitForElement(self::$wait);
        $I->getVisibleText('Lawnflite');
        $I->waitForElement(self::$firstItem);
        $I->click(self::$firstItem);
       // $I->seeLink('Lawnflite 703 RT Lawn Tractor',self::$seeLink);
        $I->waitForElement(self::$optional);

        $I->click(self::$input1);
        $I->waitForElement(self::$input1Show);

        $I->click(self::$input2);
        $I->waitForElement(self::$input2Show);

        $I->click(self::$input3);
        $I->waitForElement(self::$input3Show);

        $I->click(self::$addToCart);
        $I->waitForElement(self::$specialProd);
        $I->waitForElement(self::$accessories);
        $I->moveMouseOver(self::$move);
        $I->waitForElementVisible(self::$waitAccessories);




    }



    


}