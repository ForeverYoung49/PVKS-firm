<?php 
	if (isset($_POST['go'])) {

		$date = date('o');

		$age = $date - $_POST['year'];

		echo "Вам $age лет.";

	}