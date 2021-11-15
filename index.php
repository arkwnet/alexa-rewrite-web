<?php
$data = file_get_contents("rewrite.txt");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>alexa-rewrite-web</title>
		<meta charset="utf-8">
		<meta name="robots" content="noindex, nofollow">
		<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	</head>
	<body>
		<div id="data_temp" style="display: none;"><?php echo $data ?></div>
		<form action="write.php" method="POST">
			<textarea name="data" id="data"></textarea><br>
			<input type="submit" value="Submit">
		</form>
		<script type="text/javascript"><!--
			CKEDITOR.replace("data");
			CKEDITOR.instances.data.setData(document.getElementById("data_temp").innerHTML);
		--></script>
	</body>
</html>