<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>bank.nl</title>
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <script src="js/bootstrap.min.js"></script>
	    <ul>
			<?php
				$geld = $_POST['geld'];
				$rente = $_POST['rente'];
				$jaar = $_POST['jaar'];
				$start = $geld;
				$perc = ($rente + 100)/100;
				for ($i=0;$i<=$jaar;$i++){
					echo "<li>Jaar $i: &euro;$geld</li>";
					$geld = round($geld* $perc,2);
				}
				$verschil = $geld - $start;
				echo "In $jaar jaar is er &euro;$verschil bijgekomen aan rente";
			?>
		</ul>
	</body>
</html>