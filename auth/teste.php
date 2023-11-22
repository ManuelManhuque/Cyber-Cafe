<?php

	$data = date("Y-m-d"); // Sua data no formato "YYYY-MM-DD"

	// Extrair o ano da data
	$ano = date("Y", strtotime($data));

	echo "O ano é: " . $ano;

?>
