<?php
/**
 * Created by PhpStorm.
 * User: obana
 * Date: 10.06.16
 * Time: 16:17
 */

namespace Page;


class MagentoManageContent
{

    public static $cmsDropDown = '//*[@class="nav-bar"]/ul/li[8]';
    public static $pagesDropDown = '//*[@class="nav-bar"]/ul/li[8]/ul/li[1]/a/span';
    public static $manageContent = '//*[@class="nav-bar"]/ul/li[8]/ul/li[1]/ul/li[1]/a/span';


    protected $tester;

    public function __construct(\AcceptanceTester $I)

    {
        $this->tester = $I; // подкл. конструктора
    }

    public function goToManagePage() {
        $I = $this->tester;
        $I ->moveForward(self::$cmsDropDown);
        $I->waitForElement(self::$pagesDropDown);
        $I->moveForward(self::$pagesDropDown);
        $I->waitForElement(self::$manageContent);
        $I->click(self::$manageContent);


    }

}