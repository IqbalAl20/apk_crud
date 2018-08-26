<?php
include "koneksi.php";
$nama = $_POST['nama'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = md5($_POST['password']);
if (empty($nama)){
echo "<script>alert('Nama belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else

if (empty($email)){
echo "<script>alert('email belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";

}else
 
if(empty($username)){
echo "<script>alert('Username belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else 
if (empty($password)){
echo "<script>alert('Password belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else{
$daftar = mysql_query("INSERT INTO user (nama,email,username,password) values ('$nama','$email','$username','$password')");
if ($daftar){
echo "<script>alert('berhasil mendaftar..')</script>";
echo "<meta http-equiv='refresh' content='1 url=index.php'>";
}else{
echo "<script>alert('data anda salah')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}
}
?>