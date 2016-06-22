<?php
use \Step\Acceptance;

/**
 * @group checkout
 */
class CheckoutCest
{

    /**
     * @param Acceptance\CheckoutSteps|Acceptance\LoginSteps $I
     * T918_Tractor Sale
     * @param \Page\Checkout $checkoutPage
     */

    function T918TractorSale(\Step\Acceptance\CheckoutSteps $I,\Page\Checkout $checkoutPage){
        $I->addToBasketTractor();
        $checkoutPage->checkPayment('mowdirect@gmail.com','123456');
    }

    /**
     * @param Acceptance\CheckoutSteps $I
     * T919_Mower Sale
     * @param \Page\Checkout $checkoutPage
     */

    function T919MowerSale(\Step\Acceptance\CheckoutSteps $I,\Page\Checkout $checkoutPage){
        $I->addToBasketMower();
        $checkoutPage->checkPayment('mowdirect@gmail.com','123456');
    }


    /**
     * @param Acceptance\CheckoutSteps $I
     * T920_Purchase Tractor with other product
     * @param \Page\Checkout $checkoutPage
     */


    function T920TractorOtherProduct(\Step\Acceptance\CheckoutSteps $I,\Page\Checkout $checkoutPage){
        $I->addToBasketTractor();
        $I->purchaseOtherItem();
        $checkoutPage->checkPayment('mowdirect@gmail.com','123456');
    }

    /**
     * @param Acceptance\CheckoutSteps $I
     * @param \Page\Checkout $checkoutPage
     * T921 Purchase Tractor with custom option
     */

    function T921TractorCustomOption(\Step\Acceptance\CheckoutSteps $I, \Page\Checkout $checkoutPage){
        $I->optional();
        $checkoutPage->checkPayment('mowdirect@gmail.com','123456');
    }

    /**
     * @param Acceptance\CheckoutSteps $I
     * T922_Purchase Multiple Different Products Same supplie
     * @param \Page\Checkout $checkoutPage
     */


    function T922ProductsSameSupplie(\Step\Acceptance\CheckoutSteps $I,\Page\Checkout $checkoutPage){
        $I->selectTwoBrands();
        $checkoutPage->checkPayment('mowdirect@gmail.com','123456');
    }

    /**
     * @param Acceptance\CheckoutSteps $I
     * T923_Purchase Multiple Number of Products
     * @param \Page\Checkout $checkoutPage
     */

    function T923T924PurchaseSuppliers(\Step\Acceptance\CheckoutSteps $I,\Page\Checkout $checkoutPage){
        $I->multipleNumberProducts();
        $checkoutPage->checkPayment('mowdirect@gmail.com','123456');
    }







    

    
    
    



    

}

