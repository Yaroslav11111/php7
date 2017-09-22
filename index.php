<?php
require __DIR__ . '/vendor/autoload.php';

$app = new sn\app\App();
$payPal = new sn\app\PaymentSystem\PayPal();
$privat = new sn\app\PaymentSystem\PrivatBank();
$paymentSystem = new sn\app\PaymentService();


$paymentSystem->payment($privat);

