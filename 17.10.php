<form  method="GET">
<input type ="text" name="firstArg" value="<?php 
	if (isset ($_GET['firstArg'])) {
		echo $_GET['firstArg'];
	}
		?> ">
<input type ="text" name="secondArg" value="<?php 
	if (isset ($_GET['asecondArg'])) {
		echo $_GET['secondArg'];
	}
		?>">
<input type ="submit" value="сумма" name="add">
	<select name="action">
		
<option value="Add"> Слож</option>
</select>
</form>

<?php
class Action{
	public $firstArg;
	public $secondArg;
	public $result;
} 
class ActionAdd extends Action{
	public function calc(){
		$this->result=$this->firstArg+$this->secondArg;
	} 
} 
?>

<?php
If(isset($_GET['action'])){
	$class="Action".$_GET['action'];
	$action=new $class;
	$action->firstArg=intval($_GET['firstArg']);
	$action->secondArg=intval($_GET['secondArg']);
	$action->calc();?>
	<div class="result">
		Результат:	<?=$action->result;?>
	</div>
<?php }?>

