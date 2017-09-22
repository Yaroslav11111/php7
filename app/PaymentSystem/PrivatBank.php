<?php

namespace sn\app\PaymentSystem;


class PrivatBank implements PaymentSystemInterface
{
    public function payment()
    {
       echo 'ПриватБанк принял платеж';
    }
}