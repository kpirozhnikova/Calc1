<html>
<head>
<title>
Summator
</title>
</head>
<body>
<form method='GET'>
<input type="text" name="arg1" value="">
<input type="text" name="arg2" value="">
<input type="submit" value="Сумма">
</form>
<?php
if (isset($_GET['arg1']) && (isset($_GET['arg2']))) {
	$a=$_GET['arg1'];
	$b=$_GET['arg2'];
	$c=intval($_GET['arg1']) + intval($_GET['arg2']);
	echo "<div>".$a. "+" .$b. "="  .$c. "</div>";
}
?>
</body>
</html>