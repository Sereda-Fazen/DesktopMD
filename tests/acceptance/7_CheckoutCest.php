<?php
use \Step\Acceptance;

/**
 * @group checkout
 */
class CheckoutCest
{

    /**
     * @param Acceptance\LoginSteps $I
     * T918_Tractor Sale
     */

    function loginSuccess(Step\Acceptance\LoginSteps $I) {
        $I->loginSuccess('mowdirect@gmail.com','123456');
    }
    
    function addToBasketTractor(\Step\Acceptance\CheckoutSteps $I){
        $I->addToBasketTractor();
    }

    function checkOrderTractor(\Page\Checkout $checkoutPage){
        $checkoutPage->checkOrder();
    }

    /**
     * @param Acceptance\CheckoutSteps $I
     * T919_Mower Sale
     */

    function addToBasketMower(\Step\Acceptance\CheckoutSteps $I){
        $I->addToBasketMower();
    }

    function checkOrderMower(\Page\Checkout $checkoutPage){
        $checkoutPage->checkOrder();
    }


    /**
     * @param Acceptance\CheckoutSteps $I
     * T920_Purchase Tractor with other product
     */


    function addToBasketTractorForOther(\Step\Acceptance\CheckoutSteps $I){
        $I->addToBasketTractor();
    }
    function purchaseOtherItem(\Step\Acceptance\CheckoutSteps $I){
        $I->purchaseOtherItem();
    }

    function checkOrderTractorOther(\Page\Checkout $checkoutPage){
        $checkoutPage->checkOrder();
    }

    /**
     * @param Acceptance\CheckoutSteps $I
     * T922_Purchase Multiple Different Products Same supplie
     */


    function selectTwoBrands(\Step\Acceptance\CheckoutSteps $I){
        $I->selectTwoBrands();
    }

    function checkOrderMultipleTractor(\Page\Checkout $checkoutPage)
    {
        $checkoutPage->checkOrder();
    }

    /**
     * @param Acceptance\CheckoutSteps $I
     * T923_Purchase Multiple Number of Products
     */

    function multipleNumberProducts(\Step\Acceptance\CheckoutSteps $I){
        $I->multipleNumberProducts();
    }

    function checkOrderMultipleProducts(\Page\Checkout $checkoutPage)
    {
        $checkoutPage->checkOrder();
    }


    function purchaseTractorOption(\Step\Acceptance\CheckoutSteps $I, \Page\Checkout $checkoutPage){
        $checkoutPage->purchaseTractorOption('Lawnflite accessories optional');
        
    }

    function checkOrderTractorOption(\Page\Checkout $checkoutPage)
    {
        $checkoutPage->checkOrder();
    }




    

    
    
    



    

}

