<?php
	error_reporting(0);
	function biodata(){
		$school->highschool = "SMK SYAFI'I AKROM KOTA PEKALONGAN";
		$school->university = "Tidak ada";
		$nama = "Zidni Hidayat Edby";
		$address = "Gembong GG BERINGIN 4 No 64 Kedungwuni Barat Kedungwuni Kabupaten Pekalongan";
		$hobbies = array("Game","Mencari Hal Baru","Playing","Tiduran");
		$is_married = false;
		$skill = array("game"=>"Best","editing"=>"Bad","logic"=>"Best");
		$biodata = array($nama,$address,$hobbies,$is_married,$school,$skill);
		print(json_encode($biodata));
	}
	biodata();
?>