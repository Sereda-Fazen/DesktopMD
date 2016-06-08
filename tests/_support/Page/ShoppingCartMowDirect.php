<?php
/**
 * Created by PhpStorm.
 * User: obana
 * Date: 07.06.16
 * Time: 16:58
 */

namespace Page;


class ShoppingCartMowDirect
{



    public static $URL = '/';
    public static $URL1 = '/checkout/cart/';
    public static $LawnTractorsLocator = '//*[@id="wp-nav-container"]/nav/ul/li[2]';
    public static $HeavyDutyTractors = '//*[@class="item2 active"]/nav/div[4]/h3/a';
    public static $assertHeavyDutyTractors = '//*[@class="mb-content"]//div/h1';
    public static $addToBasket1Button = '//*[@class="category-products"]//li[1]/div[2]/div/div[3]/p[1]';
    public static $headerBasket = '//*[@class="header-minicart"]/a';
    public static $headerPayPal = './/*[@id="ec_shortcut_cf93769374aae8421f6c6663213e364d"]/img';
    // Shopping Cart

  //  public static $assertYourBasket = '//*[@id="cart_desktop\"]/div[1]/div[1]/h1';
    public static $payPalCheckoutLink = '//ul[@class="checkout-types bottom"]/li/p//img';


    //PayPal Page
    public static $emailField = '//*[@id="email"]';
    public static $passwordField = '//*[@id="password"]';
    public static $loginButton = './/*[@id="btnLogin"]';



    protected $tester;
    public function __construct(\AcceptanceTester $I)

    {
        $this->tester = $I; // подкл. конструктора
    }

    public function addItemToCart() {
        $I = $this->tester;
        $I->amOnPage(self::$URL);
        $I->moveMouseOver(self::$LawnTractorsLocator);
        $I->waitForElement(self::$HeavyDutyTractors);
        $I->click(self::$HeavyDutyTractors);
        $I->waitForElement(self::$assertHeavyDutyTractors);
        $I->click(self::$addToBasket1Button);
        $I->waitForElement(self::$payPalCheckoutLink);
    //     $I->see('Your Basket',self::$assertYourBasket);
    }

    public function payPalCheck($email, $pass){
        $I = $this->tester;
       // $I->amOnPage(self::$URL1);
        $I->waitForElementVisible(self::$payPalCheckoutLink);
        $I->click(self::$payPalCheckoutLink);
        $I->waitForElement(self::$emailField);
        $I->fillField(self::$emailField, $email);
        $I->fillField(self::$passwordField, $pass);
        $I->click(self::$loginButton);
    }
}