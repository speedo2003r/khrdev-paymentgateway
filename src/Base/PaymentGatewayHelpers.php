<?php

namespace khrdev\Paymentgateway\Base;

use khrdev\Paymentgateway\Base\Gateways\BillPlzPay;
use khrdev\Paymentgateway\Base\Gateways\CashFreePay;
use khrdev\Paymentgateway\Base\Gateways\CinetPay;
use khrdev\Paymentgateway\Base\Gateways\FlutterwavePay;
use khrdev\Paymentgateway\Base\Gateways\InstamojoPay;
use khrdev\Paymentgateway\Base\Gateways\MidtransPay;
use khrdev\Paymentgateway\Base\Gateways\MolliePay;
use khrdev\Paymentgateway\Base\Gateways\PayFastPay;
use khrdev\Paymentgateway\Base\Gateways\PaypalPay;
use khrdev\Paymentgateway\Base\Gateways\PaystackPay;
use khrdev\Paymentgateway\Base\Gateways\PaytmPay;
use khrdev\Paymentgateway\Base\Gateways\PayUmoneyPay;
use khrdev\Paymentgateway\Base\Gateways\RazorPay;
use khrdev\Paymentgateway\Base\Gateways\SquarePay;
use khrdev\Paymentgateway\Base\Gateways\StripePay;
use khrdev\Paymentgateway\Base\Gateways\MarcadoPagoPay;
use khrdev\Paymentgateway\Base\Gateways\ZitoPay;


/**
 * @see SquarePay
 * @method  setApplicationId();
 * @method  setAccessToken();
 * @method  setLocationId();
 */

class PaymentGatewayHelpers
{

    public function stripe() : StripePay
    {
        return new StripePay();
    }
    public function paypal() : PaypalPay
    {
        return new PaypalPay();
    }
    public function midtrans() : MidtransPay
    {
        return new MidtransPay();
    }
    public function paytm() : PaytmPay
    {
        return new PaytmPay();
    }
    public function razorpay() : RazorPay
    {
        return new RazorPay();
    }
    public function mollie() : MolliePay
    {
        return new MolliePay();
    }
    public function flutterwave() : FlutterwavePay
    {
        return new FlutterwavePay();
    }
    public function paystack() : PaystackPay
    {
        return new PaystackPay();
    }

    public function payfast() : PayFastPay
    {
        return new PayFastPay();
    }
    public function cashfree() : CashFreePay
    {
        return new CashFreePay();
    }
    public function instamojo() : InstamojoPay
    {
        return new InstamojoPay();
    }
    public function marcadopago() : MarcadoPagoPay
    {
        return new MarcadoPagoPay();
    }
    public function payumoney() : PayUmoneyPay
    {
        return new PayUmoneyPay();
    }
    public function squareup() : SquarePay
    {
        return new SquarePay();
    }
    public function cinetpay() : CinetPay
    {
        return new CinetPay();
    }
    public function billplz() : BillPlzPay
    {
        return new BillPlzPay();
    }
    public function zitopay() : ZitoPay
    {
        return new ZitoPay();
    }
    public function script_currency_list(){
        return GlobalCurrency::script_currency_list();
    }

    public static function wrapped_id($id){
        return random_int(11111,99999).$id.random_int(11111,99999);
    }
}
