<?php

    namespace App\Enums;

    class TransactionStatus
    {
        public const PENDING = 'pending';
        public const SUCCESS = 'success';
        public const FAILED = 'failed';

        public const ALL_STATUSES = [
          self::PENDING => "Pending",
          self::SUCCESS => "Success",
          self::FAILED => "Failed"
        ];

    }