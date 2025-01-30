<?php

    namespace App\PaymentGateway\Paddle;

    use App\Enums\TransactionStatus;
    use http\Exception\InvalidArgumentException;

    class Transaction
    {
        private $status;

        public function __construct()
        {
            echo "Paddle Transaction Payment Gateway";
        }

        public function setStatus($status): self
        {
            if(!isset(TransactionStatus::ALL_STATUSES[$status])) {
                throw new InvalidArgumentException('Invalid status');
            }
            $this->status = $status;
            return $this;
        }
    }
