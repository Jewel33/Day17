<?php
	if(isset($_POST['btn'])){
		require_once './MyCal.php';
		$calculator = new MyCal();
		$result = $calculator->cal($_POST);
	}
?>

<form action="" method="post">
	<table >
		<tr>
			<td>First Number</td>
			<td><input type="text" name="firstNumber" value="<?php echo $_POST['firstNumber'] ?>"></td>
		</tr>
		<tr>
			<td>Last Number</td>
			<td><input type="text" name="lastNumber" value="<?php echo $_POST['lastNumber'] ?>"></td>
		</tr>
		<tr>
			<td>Result</td>
			<td><input type="text" name="result" value="<?php echo $result; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="btn" value="+">
				<input type="submit" name="btn" value="-">
				<input type="submit" name="btn" value="*">
				<input type="submit" name="btn" value="/">
				<input type="submit" name="btn" value="%">
			</td>
		</tr>	
	</table>
</form>