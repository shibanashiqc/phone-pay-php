<?php 

use Shibanashiqc\PhonePay\PhonePay;

require_once __DIR__ . '/../vendor/autoload.php';

$phone_pay = new PhonePay('MERCHANTUAT', '099eb0cd-02cf-4e2a-8aca-3e6c6aff0399', 1);
echo json_encode($phone_pay->checkPaymentStatus('MERCHANTUAT', '1234567890'));

