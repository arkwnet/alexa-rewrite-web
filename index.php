<?php
$data = file_get_contents("rewrite.txt");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>alexa-rewrite-web</title>
		<meta charset="utf-8">
		<meta name="robots" content="noindex, nofollow">
	</head>
	<body>
		<form action="write.php" method="POST">
			<textarea name="data"><?php echo $data ?></textarea><br>
			<input type="submit" value="Submit">
		</form>
	</body>
</html>