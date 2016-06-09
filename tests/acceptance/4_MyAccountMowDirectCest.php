<?php

/**
 * @group myAccount
 */
class MyAccountMowDirectCest



{

//    function Search(Step\Acceptance\LoginStepsMowDirect $I, \Page\SearchMowDirect $searchMowDirect) {
 //       $searchMowDirect->searchMowDirect('Husvarna 321', 'bds');
  //  }


        function T939EditAContactInformation(Step\Acceptance\LoginStepsMowDirect $I, \Page\MyAccountMowDirect $accountMowDirect) {
            $I->loginSuccess('mowdirect@gmail.com', '123456');
            $accountMowDirect->accountInformationMowDirect('Test','Test1','Test2');
        }

        function T942EditABillingAddress(Step\Acceptance\LoginStepsMowDirect $I, \Page\MyAccountMowDirect $accountMowDirect) {
        //   $I->loginSuccess('mowdirect@gmail.com', '123456');
            $accountMowDirect->addDefaultBillingAddress('Test2','Test2','333333333','Test Address1','Test City1','321321');

        }

    function T941EditAShippingAddress(Step\Acceptance\LoginStepsMowDirect $I, \Page\MyAccountMowDirect $accountMowDirect) {
     //   $I->loginSuccess('mowdirect@gmail.com', '123456');
        $accountMowDirect->changeShippingAddress('Test3','Test3','4444444','Test Address2','Test City2','231231');

    }

    function T943AddNewAddressIntoTheAddressBook(Step\Acceptance\LoginStepsMowDirect $I, \Page\MyAccountMowDirect $accountMowDirect) {
                $accountMowDirect->addNewAddress('Test4','Test4','555555555','Test Address3','Test City3','312312');
    }

    function T937ViewOrderT938ReorderOrder(Step\Acceptance\LoginStepsMowDirect $I, \Page\MyAccountMowDirect $accountMowDirect) {
     //   $I->loginSuccess('mowdirect@gmail.com', '123456');
        $accountMowDirect->orderReorderCheck();
    }

    function T947SendInvitationToFriend(Step\Acceptance\LoginStepsMowDirect $I, \Page\MyAccountMowDirect $accountMowDirect) {
   //     $I->loginSuccess('mowdirect@gmail.com', '123456');
        $accountMowDirect->myInvitationsCheck('denimio4@gmail.com');
    }















}