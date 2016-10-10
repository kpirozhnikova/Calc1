<?php
function calc($arg1,$arg2,$action) {
	if ($action == "add") {
		return $arg1+$arg2;
	} else if ($action =="sub") {
		return $arg1-$arg2;
	}
}
?>
<?php if(isset($_GET['$arg1']) && isset($_GET['arg2'])){
if (isset($_GET['add'])){
	$action='add';
}else if (isset($_GET['sub'])){
	$action='sub';
}
?>
<div>
Результат <?=calc($_GET['arg1'],$_GET['arg2'],$action)?>
</div>
<?php } ?>