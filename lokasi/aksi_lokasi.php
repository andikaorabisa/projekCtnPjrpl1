<?php
    include "../koneksi.php";

    if(!empty($_POST['act'])){
        $act = $_POST ['act'];
    }
   else if (!empty($_GET['act'])){
    $act = $_GET['act'];
   }

    if($act == "simpan"){
        $nama_lokasi = $_POST['nama_lokasi'];
        $alamat_lokasi = $_POST['alamat_lokasi'];

        $sql = mysqli_query($koneksi, "INSERT INTO lokasi VALUES(NULL,'".$nama_lokasi."', '".$alamat_lokasi."')");
        if($sql){
            header('location:data_lokasi.php');
          //  echo "berhasil input ke tabel lokasi" ;
          $id_lokasi = $_POST['id_lokasi'];
          $nama_lokasi = $_POST['nama_lokasi'];
          $alamat_lokasi = $_POST['almat_lokasi'];

          $sql = mysqli_query($koneksi, "UPDATE lokasi SET nama_lokasi='".$nama_lokasi."', alamat_lokasi='".$alamat_lokasi."' WHERE id_lokasi = '".$id_lokasi."'");
          if ($sql){
            header('location:lokasi.php');
          }
        }else{
            echo "gagal input ke tabel lokasi";
        }
    }else if ($act == "update"){
        //--- disini gunanya untuk mengupdate data ke tabel lokasi ---
        
    }else if ($act == "delete"){
        $id_lokasi = $_GET['id_lokasi'];
        $sql = mysqli_query($koneksi, "DELETE FROM lokasi WHERE id_lokasi = '".$id_lokasi."'");
        if($sql){
            header('location:data_lokasi.php');

        }else{
            echo"gagal hapus data";
        }                      
    }
?>