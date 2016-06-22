<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{

    function myAccountOrder(Step\Acceptance\LoginStepsMowDirect $I, \Page\MyAccountMowDirect $accountMowDirect, \Page\Checkout $checkout, \Page\GmailPage $gmailPage)
    {
        $I->loginSuccess('mowdirect@gmail.com', '123456');
        $accountMowDirect->orderReorderCheck();
    }

}

