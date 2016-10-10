<meta charset="UTF-8">
<form  method="GET">
<input type ="text" name="arg1" value="<?php 
	if (isset ($_GET['arg1'])) {
		echo $_GET['arg1'];
	}
		?> ">
<input type ="text" name="arg2" value="<?php 
	if (isset ($_GET['arg2'])) {
		echo $_GET['arg2'];
	}
		?>">
<input type ="submit" value="сумма" name="add">
<input type ="submit" value="вычетание"  name="sub">
</form>


<?php function calc($arg1,$arg2,$action) {
if ($action=="add"){
return $arg1+$arg2;
} else if ($action=="sub") {
return $arg1-$arg2;
}
}
?>

<?php if (isset($_GET['arg1'])&& isset($_GET['arg2'])) { 
if (isset($_GET["add"])){
$action="add";
} else if (isset($_GET["sub"])){
$action="sub";
}
?>
<div>
Результат: <?=calc($_GET['arg1'],$_GET['arg2'],$action)?>
</div>
<?php } ?>