<?php
/**
 * Created by PhpStorm.
 * User: obana
 * Date: 07.06.16
 * Time: 15:27
 */

namespace Page;


class FiltersMowDirect
{

    public static $URL = '/';
    public static $LawnTractorsLocator = '//*[@id="wp-nav-container"]/nav/ul/li[2]';
    public static $HeavyDutyTractors = '//*[@class="item2 active"]/nav/div[4]/h3/a';
    public static $assertHeavyDutyTractors = '//*[@class="mb-content"]//div/h1';
    public static $unCheckbox2Manufactures = '//dl[@class="narrow-by-list"]//dd[2]//li[2]/a[@class="m-checkbox-unchecked"]';
    public static $checkbox2Manufactures = ' //dl[@class="narrow-by-list"]//dd[2]//li[2]/a[@class="m-checkbox-checked"]';
    public static $unCheckbox3Manufactures = '//dl[@class="narrow-by-list"]//dd[2]//li[3]/a[@class="m-checkbox-unchecked"]';
    public static $checkbox3Manufactures = ' //dl[@class="narrow-by-list"]//dd[2]//li[3]/a[@class="m-checkbox-checked"]';
    public static $firstItem = '//*[@id="products-list"]/li[1]';



    protected $tester;


    public function __construct(\AcceptanceTester $I)

    {
        $this->tester = $I; // подкл. конструктора
    }

    public function filtersCheckbox() {

        $I = $this->tester;
        $I->amOnPage(self::$URL);
        $I->moveMouseOver(self::$LawnTractorsLocator);
        $I->click(self::$HeavyDutyTractors);
        $I->waitForElement(self::$assertHeavyDutyTractors);
        $I->see('Heavy-Duty Garden Tractors',self::$assertHeavyDutyTractors);
        $I->click(self::$unCheckbox3Manufactures);
        $I->waitForElement(self::$checkbox3Manufactures);
        $I->wait(3);
        $I->click(self::$unCheckbox2Manufactures);
        $I->waitForElement(self::$checkbox2Manufactures);
    }





}