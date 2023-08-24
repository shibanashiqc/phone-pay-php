<?php

use Shibanashiqc\PhonePayPhp\PhonePay;

require_once __DIR__ . '/../vendor/autoload.php';


$phone_pay = new phonePay('MERCHANTUAT', '099eb0cd-02cf-4e2a-8aca-3e6c6aff0399', 1);
$phone_pay->client->setCallbackUrl('https://site/phonepay/callback');
$phone_pay->client->setRedirectUrl('https://site/phonepay/callback');

$request = $phone_pay->getPaymentRequest(1, '1234567890', '1234567890', '9999999999');
$redirect_url = $phone_pay->getPaymentRedirectUrl($request);
echo $redirect_url; 




