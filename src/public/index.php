<?php
	declare(strict_types=1);

	$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;

	define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
	define('DATA_PATH', $root . 'data' . DIRECTORY_SEPARATOR);
	define('VIEW_PATH', $root . 'views' . DIRECTORY_SEPARATOR);

	require APP_PATH . 'App.php';
	require APP_PATH . 'helpers.php';

	$files = getTransactionFiles(DATA_PATH);
	$transactions = [];

	foreach ($files as $file) {
		$transactions = array_merge($transactions, getTransactions($file, 'parseTransaction'));
	}

	$totals = calculateTotals($transactions);

	require VIEW_PATH . 'transactions.php';