<?php

if ($_SERVER['REQUEST_METHOD']=='POST') {
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $telepon=$_POST['telepon'];
    $Asal_Institusi=$_POST['asal_institusi'];


$con = new mysqli('localhost', 'root', 'nra1223004', 'form');

if ($con) {
    // echo "Koneksi berhasil bos";
    $sql="insert into form_COC(Nama, email, telepon, asal_institusi) values('$nama', '$email', '$telepon', '$Asal_Institusi')";
    $result=mysqli_query($con, $sql);
    if ($result) {
        echo "Data has Succesfully added";
    }else {
        die(mysqli_error($con));
    }
} else {
    die(mysqli_error($con));
}

}

?>