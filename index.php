<?php
	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
?>
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
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	include("NSUPDATE.php");
	// sleep สักพักผู้ใช้จะได้ไม่ต้องรีโหลดเอง
	sleep(1);
}
?>
<?php include("AXFR.php");?>
		<div id="panel">
		<button type="button" onclick="window.location.href = './';" style="float: right;">Reload RR</button>
		<?php
		echo "ZONE $ZONE <BR><BR>";
		?>

<?php include("ADDMENU.php");?><BR><BR>
<?php include("GUI.php");?>


		<p>STATUS RR</p>
		<textarea disabled rows="16" cols="128" id="command_output" placeholder="Command Output..."><?php print_r($dnsRecords); ?></textarea>
		<BR>
		<p>DIG AXFR STATUS</p>
		<textarea disabled rows="16" cols="128" id="command_output" placeholder="Command Output..."><?php foreach($cmdout as $DIGRAWCMDOUT) { echo htmlspecialchars($DIGRAWCMDOUT); echo "\n";} ?></textarea>
		<BR>
		<p>EXIT CODE IS <?php print_r($exitcode); ?></p>
<?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
		echo "<p>NSUPDATE STATUS</p>";
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
