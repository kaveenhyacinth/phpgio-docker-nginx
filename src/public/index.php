<?php

    require_once __DIR__ . '/../app/PaymentGateway/Paddle/Transaction.php';
    require_once __DIR__ . '/../app/PaymentGateway/Stripe/Transaction.php';

    use App\PaymentGateways\Paddle\Transaction as PaddleTransaction;
    use App\PaymentGateways\Stripe\Transaction as StripeTransaction;

    $stripe = new StripeTransaction();
    echo '<br>';
    $paddle = new PaddleTransaction();
