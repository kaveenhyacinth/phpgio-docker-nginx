<?php

    require_once __DIR__ . '/../vendor/autoload.php';

    use App\Enums\TransactionStatus;
    use App\PaymentGateway\Paddle\Transaction;
    use Ramsey\Uuid\UuidFactory;

    $id = new UuidFactory();

    echo $id->uuid4() . '<br />';

    $paddleTransaction = new Transaction();
    $paddleTransaction->setStatus(TransactionStatus::PENDING);
