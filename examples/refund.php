<?php 

use Shibanashiqc\PhonePayPhp\PhonePay;

require_once __DIR__ . '/../vendor/autoload.php';

$phone_pay = new PhonePay('MERCHANTUAT', '099eb0cd-02cf-4e2a-8aca-3e6c6aff0399', 1);
$phone_pay->client->setBaseUrl('https://api-preprod.phonepe.com/apis/merchant-simulator'); 
$phone_pay->client->setCallbackUrl('https://site/phonepay/callback');
$phone_pay->client->setRedirectUrl('https://site/phonepay/callback');

$request = $phone_pay->refund(10000, '1234567890', '1234567890');
echo json_encode($request);