<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{


    function purchaseTractorWithCustomOption(\Step\Acceptance\AccountSteps $I, \Page\MyAccountMowDirect $accountMowDirectPage){

        $I->loginSuccess('mowdirect@gmail.com','123456');
        $accountMowDirectPage->myAddReview();
        $I->cycleRate();

    }


}

