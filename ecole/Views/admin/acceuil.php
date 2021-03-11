<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Acceuil</title>
</head>
<body>
	<h3>Page d'acceuil</h3>

	<?php
	session_start();
		if (isset($_POST['login'])) {
			$login= $_POST['login'];
		}
		else {
			$login= $_SESSION['login'];
		}
		echo "ravi de vous revoir ".$login;
	?>

<?php
	include('index.php');
?>
</body>
</html>