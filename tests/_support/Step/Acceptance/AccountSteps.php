<?php
namespace Step\Acceptance;


class AccountSteps extends \AcceptanceTester
{

    public function loginSuccess ($login,$pass)
    {
        $I = $this;
        $I->amOnUrl('http://www.mowdirect.co.uk/');
        $I->waitForElement('//div[@class="fright"]/ul/li[3]/a[1]');
        $I->click('//div[@class="fright"]/ul/li[3]/a[1]');
        $I->fillField('#email',$login);
        $I->fillField('#pass', $pass);
        $I->click('[name="send"] > span > span');
        $I->waitForElement('p.hello > strong');
        // $I->see('Hello    Test Test2', 'p.hello > strong');
    }
    
    
    public function cycleRate ()
    {
        $I = $this;
        $rate = count($I->grabMultiple('//*[@class="form-list"]//tbody/tr'));
        for($r=1;$r <= $rate; $r++){
            $I->click('//*[@class="form-list"]//tbody/tr['.$r.']/td['.rand(1,5).']/input');
        }

        $I->waitForElement('//*[@class="box-content"]//ul[2]');
        $I->fillField('//*[@class="box-content"]//ul[2]/li//input', 'Test');
        $I->fillField('//*[@class="box-content"]//ul[2]/li[2]//input','Test2');
        $I->fillField('//*[@class="box-content"]//ul[2]/li[3]//input','Test3');
        $I->click('//*[@class="buttons-set form-buttons btn-only"]/div');
        $I->waitForElement('//li[@class="success-msg"]');
        $I->see('Your review has been accepted for moderation.', '//li[@class="success-msg"]');
        
    }





}