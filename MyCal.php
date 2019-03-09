<?php 
	class MyCal{
		function cal($data){
			$btn = $data['btn'];
			switch ($btn) {
				case '+':
					$result = $data['firstNumber']+$data['lastNumber'];
					break;
				
				case '-':
					$result = $data['firstNumber']-$data['lastNumber'];
					break;
				case '*':
					$result = $data['firstNumber']*$data['lastNumber'];
					break;
				case '/':
					$result = $data['firstNumber']/$data['lastNumber'];
					break;
				case '%':
					$result = $data['firstNumber']%$data['lastNumber'];
					break;
			}return $result;
		}
	}
?>