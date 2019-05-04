<?php 
	function cetak($param)
	{
		$char = "0123456789abcdefghijklmnopqrstuvwxyz";
		for ($i=0; $i <$param ; $i++) { 
			$randomChar = substr(str_shuffle($char), 0, 32);
			print($randomChar."<br>");
		}
	}
	cetak(5);
?>