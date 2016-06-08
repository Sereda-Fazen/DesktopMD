<?php
use \Step\Acceptance;

/**
 * @group checkout
 */
class ProductsCest
{

    /**
     * @param Acceptance\ProductsSteps $I
     * @param \Page\Checkout $checkoutPage
     * T917_View a standard Product Layout
     */


    function productsLayout(\Step\Acceptance\ProductsSteps $I, \Page\Checkout $checkoutPage){
        $I->productsLayout();
    }


    /**
     * @param Acceptance\ProductsSteps $I
     * @param \Page\Search $search
        T_934_View a Product layout with custom options
     */

    function productsLayoutCustomOptions(\Step\Acceptance\ProductsSteps $I, \Page\Search $search){
        $search->search();
        $search->searchInvalid('optional accessories');
        $I->productsLayoutCustomOptions();
    }




    

    
    
    



    

}

