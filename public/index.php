<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>postbank</title>
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link rel="stylesheet" type="text/css" href="css/styles.css">
	</head>
	<body>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <script src="js/bootstrap.min.js"></script>
	    <div class="nav navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">Postbank</a>
                    </div>
                </div>
            </div>
		<form action="result.php" method="post">
			<table>
				<tr>
					<td>
						Startbedrag:
					</td>
					<td>
						<input required type="number" name="geld" placeholder="1"> Euro
					</td>
				</tr>
				<tr>
					<td>
						Jaarlijkse rente:
					</td>
					<td>
						 <input required type="number" name="rente" placeholder="1">%
					</td>
				</tr>
				<tr>
					<td>
						Aantal jaren te sparen:
					</td>
					<td>
						 <input required type="number" name="jaar" placeholder="1"> jaar
					</td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="bereken" class="btn btn-primary"></td>
				</tr>
			</table>
		</form>
	</body>
</html>