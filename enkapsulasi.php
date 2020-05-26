<?php

class manusia{

	public $nama = "Herdian";
	protected $alamat = "Denpasar";
	private $email = "herdian@gmail.com";

	public function tampil_nama(){
		return "Nama saya adalah : ".$this->nama."<br>";
	}
}

class manusia_public{
	public function tampil_namaP(){
		$this->nm = new manusia();
		return "Nama public saya adalah : ".$this->nm->nama."<br>";
	}
}

class manusia_protected extends manusia{
	public function tampil_alamat(){
		return "Alamat saya adalah : ". $this->alamat."<br>";
	}
} 

class manusia_private extends manusia{
	public function tampil_email(){
		
		return "Email saya adalah : ". $this->email."<br>";
	}
}


//menguji dengan object
$manusia = new manusia();
$manusiaP = new manusia_protected();
$manusiaPri = new manusia_private();
$manusiaPu = new manusia_public();

echo $manusia->tampil_nama();

echo $manusiaP->tampil_alamat();

echo $manusiaPri->tampil_email();

echo $manusiaPu->tampil_namaP();

?>