<?php
	$x = 5;

	# Heredoc syntax
	$text1 = <<<TEXT
	Hello World!
	$x
	TEXT;

	# Nowdoc syntax
	$text2 = <<<'TEXT'
	Hello World!
	$x
	TEXT;

	echo nl2br($text1); // nl2br convert new lines to new rows
	echo '<br />';
	echo nl2br($text2);


