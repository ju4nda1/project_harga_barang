<?php
class koneksi {
	private $server = "localhost";
	private $username = "id4892683_juanda";
	private $password = "nazilst12345";
	private $db = "id4892683_toko";
	private $hubungan;

	function ambilkoneksi(){
		$hubungan = new mysqli($this->server, $this->username, 
        	$this->password, $this->db);
		return $hubungan;
	}
}
?>