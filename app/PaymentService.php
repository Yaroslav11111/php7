<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 22.09.2017
 * Time: 15:36
 */

namespace sn\app;

use sn\app\PaymentSystem\PaymentSystemInterface;

class PaymentService
{
    public function payment(PaymentSystemInterface $paymentSystem)
    {
        $paymentSystem->payment();
    }
}