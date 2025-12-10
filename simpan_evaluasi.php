<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "osis";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

$nama_kegiatan      = $_POST['nama_kegiatan'];
$tanggal            = $_POST['tanggal'];
$divisi             = $_POST['divisi'];
$ketua_pelaksana    = $_POST['ketua_pelaksana'];
$jumlah_peserta     = $_POST['jumlah_amggota'];

$nilai_perencanaan  = $_POST['nilai_perencanaan'];
$nilai_koordinasi   = $_POST['nilai_koordinasi'];
$nilai_dana         = $_POST['nilai_dana'];

$apa_yang_baik = $_POST['apa_yang_baik'];
$kendala       = $_POST['kendala'];
$solusi        = $_POST['solusi'];
$saran         = $_POST['saran'];
$kesimpulan    = $_POST['kesimpulan'];

$sql = "INSERT INTO evaluasi_kegiatan 
(
    'nama_kegiatan, tanggal, divisi, ketua_pelaksana, jumlah_anggota,nilai_perencanaan, nilai_koordinasi,
    nilai_dana,
    apa_yang_baik, kendala';