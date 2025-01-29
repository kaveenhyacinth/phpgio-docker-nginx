<?php

	function formatCurrency(float $amount): string
	{
		return ($amount < 0 ? '-' : '') . '$' . number_format(abs($amount), 2);
	}

	function formatDateTime(string $date): string
	{
		return date('M d, Y', strtotime($date));
	}
