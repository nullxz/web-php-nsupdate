<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="robots" content="noindex, nofollow">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="./style.css">
		<title>DNS Control panel</title>
	</head>

	<body>
<?php include("CONFIG.php");?>
<?php include("AXFR.php");?>
		<div id="panel">
		<?php
		echo "ZONE $ZONE <BR><BR>";
		?>

<?php include("ADDMENU.php");?><BR><BR>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	include("NSUPDATE.php");
}
?>
<?php include("GUI.php");?>



		<BR><BR>
		<textarea disabled rows="16" cols="128" id="command_output" placeholder="Command Output..."><?php print_r($dnsRecords); ?></textarea>
		<BR><BR>
		<p>EXIT CODE IS <?php print_r($exitcode); ?></p>
<?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
		echo "<BR><BR>";
		echo "<textarea disabled rows=\"16\" cols=\"128\" id=\"command_output\" placeholder=\"Command Output...\">";
		print_r($nsaddExecOutput);
		echo "</textarea>";
		echo "<BR><BR>";
}
?>
		</div>
	<script src="script.js"></script>
	</body>
</html>
