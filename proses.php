<?php

include "xclass.php";
$cbiodata = new biodata();

if ($_GET['q'] == "input"){
	if (isset($_POST['simpan'])){
		$data = array(
					'id' => $_POST['id'] ,
					'nama' => $_POST['nama'] ,
					'email' => $_POST['email'] ,
					'alamat' => $_POST['alamat'] ,
					'kota' => $_POST['kota'] ,
					);
		//eksekusi disini sql
		$cbiodata->tambah_data($data);
		echo "<script>alert('Data Berhasil Disimpan');window.location = 'index.php'</script>";
	}

}else if($_GET['q'] == "update"){
	if (isset($_POST['update'])){
		$data = array(
					'id' => $_POST['id'] ,
					'nama' => $_POST['nama'] ,
					'email' => $_POST['email'] ,
					'alamat' => $_POST['alamat'] ,
					'kota' => $_POST['kota'] ,
					);
		
		$cbiodata->update_data($data);
		echo "<script>alert('Data Berhasil Diupdate');window.location = 'index.php'</script>";
	}

}else{

	$id = $_GET['id'];

	$cbiodata->hapus_data($id);
	echo "<script>alert('Data Berhasil Dihapus');window.location = 'index.php'</script>";

}
?>