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
    public static $payPalLogo = '//*[@id="paypalLogo"]';
    public static $emailField = '//*[@id="login_emaildiv"]/div[1]';
    public static $passwordField = '#password';
    public static $loginButton = '#btnLogin';



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
        }



    public function payPalCheck(){
        $I = $this->tester;
        $I->waitForElementVisible(self::$payPalCheckoutLink);
        $I->click(self::$payPalCheckoutLink);
        $I->waitForElementVisible(self::$payPalLogo);

    }




}