<?php
	global $transactions, $totals;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transactions</title>
    <style>
			body {
				padding-left: 32px;
				padding-right: 32px;
			}

			table {
				width: 100%;
				border-collapse: collapse;
				font-family: Arial, sans-serif;
			}

			thead {
				background-color: #f4f4f4;
			}

			tfoot {
				background-color: #eaeaea;
				font-weight: bold;
			}

			th, td {
				border: 1px solid #ddd;
				padding: 10px;
				text-align: left;
			}

			th {
				background-color: #333;
				color: white;
			}

			tr:nth-child(even) {
				background-color: #f9f9f9;
			}

			tr:hover {
				background-color: #f1f1f1;
			}
    </style>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>Date</th>
        <th>Check #</th>
        <th>Description</th>
        <th>Amount</th>
    </tr>
    </thead>
    <tbody>
		<?php if (!empty($transactions)): ?>
			<?php foreach ($transactions as $transaction): ?>
            <tr>
                <td><?= formatDateTime($transaction['date']) ?></td>
                <td><?= $transaction['checkNumber'] ?></td>
                <td><?= $transaction['description'] ?></td>
                <td style="color: <?= $transaction['amount'] < 0
									? 'red'
									: ($transaction['amount'] > 0 ? 'green' : 'inherit') ?>"
                >
									<?= formatCurrency($transaction['amount']) ?>
                </td>
            </tr>
			<?php endforeach; ?>
		<?php endif ?>
    </tbody>
    <tfoot>
    <tr>
        <th colspan="3">Total Income:</th>
        <td style="color: green"><?= $totals['totalIncome'] ?></td>
    </tr>
    <tr>
        <th colspan="3">Total Expenses:</th>
        <td style="color: red"><?= $totals['totalExpenses'] ?></td>
    </tr>
    <tr>
        <th colspan="3">Net Total:</th>
        <td><?= $totals['netTotal'] ?></td>
    </tr>
    </tfoot>
</table>
</body>
</html>
