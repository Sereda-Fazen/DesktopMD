<?php
/**
 * Created by PhpStorm.
 * User: obana
 * Date: 24.06.16
 * Time: 16:03
 */

namespace Page;


class MagentoManageCategories
{
    public static $catalogDown = '//*[@class="nav-bar"]/ul/li[3]';
    public static $categoriesDown = '//*[@class="nav-bar"]/ul/li[3]/ul/li[2]/a/span';
    public static $manageCategories = '//*[@class="nav-bar"]/ul/li[3]/ul/li[2]//li[1]/a/span';


// Manage Categories
    public static $assertDataPage = '//*[@class="middle"]//div[2]//h3';
    public static $assertSuccessMsg = '//*[@class="success-msg"]//li/span';
    public static $nameField = '//*[@id="group_4name"]';
    public static $saveCategory = '//*[@class="category-content"]/div[1]//button[2]';
    public static $categoryTree = '//*[@id="tree-div"]';



    protected $tester;
    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I; // подкл. конструктора
    }

    public function goToManageCategory() {
        $I = $this->tester;
        $I ->moveMouseOver(self::$catalogDown);
        $I->waitForElement(self::$categoriesDown);
        $I ->moveMouseOver(self::$categoriesDown);
        $I->waitForElement(self::$manageCategories);
        $I->click(self::$manageCategories);
        $I->waitForElementVisible(self::$assertDataPage);
        $I->see('New Root Category',self::$assertDataPage);
        $I->wait(3);
    }

    public function createCategory($name){
        $I = $this->tester;
        $I->fillField(self::$nameField,$name);
        $I->click(self::$saveCategory);
        $I->waitForElementVisible(self::$assertSuccessMsg);
        $I->see('The category has been saved.',self::$assertSuccessMsg);
        $I->see($name,self::$categoryTree);
    }

    public static $editName = '//*[@value="Test category"]';
    public static $activeYes = './/*[@id="group_4is_active"]/option[1]';
    public static $saveEditButton = '//*[@class="category-content"]/div[1]//button[3]';
    public static $deleteEditButton = '//*[@class="category-content"]/div[1]//button[2]';
    public static $logo = '//*[@class="logo"]';

    public function editCategory($name){
        $I = $this->tester;
        $I->see($name,self::$categoryTree);
        $I->click($name);
        $I->waitForElement(self::$editName);
        $I->click(self::$activeYes);
        $I->click(self::$saveEditButton);
        $I->waitForElementVisible(self::$assertSuccessMsg);
    }

    public function deleteCategory($name){
        $I = $this->tester;
        $I->see($name,self::$categoryTree);
        $I->click($name);
        $I->waitForElement(self::$editName);
        $I->scrollTo(self::$logo);
        $I->wait(2);
        $I->click(self::$deleteEditButton);
        $I->acceptPopup();
        $I->waitForElementVisible(self::$assertSuccessMsg);
    }




}
