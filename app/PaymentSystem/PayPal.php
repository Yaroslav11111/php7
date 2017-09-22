<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 22.09.2017
 * Time: 15:41
 */

namespace sn\app\PaymentSystem;


class PayPal implements PaymentSystemInterface
{
    /**
     *
     */
    public function payment()
    {
        echo 'Система PayPal выполнила платеж';
    }
}