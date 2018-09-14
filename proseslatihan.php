<?php
if (isset($_POST['Input'])){
    $nama = $_POST['nama'];
    $Nis = $_POST['nis'];
    $alamat = $_POST['alamat'];
    $jeniskelamin = $_POST['jenis kelamin'];
    $Agama = $_POST['Agama'];
    $Asalsekolah = $_POST['Asalsekolah'];
    $namaOrtu = $_POST['namaOrtu'];
    $totalnilai = $_POST['Nilai'];
    $email = $_POST['email'];
    echo "nama : <b>$nama</b><br>";
    echo "Nis : <b>$Nis</b><br>";
    echo "Alamat : <b>$alamat</b><br>";
    echo "jenis kelamin : <b>$jeniskelamin</b><br>";
    echo "Agama : <b>$Agama</b><br>";
    echo "Asal sekolah : <b>$Asalsekolah</b><br>";
    echo "Nama Orang Tua : <b>$namaOrtu</b><br>";
    echo "Mata pelajaran yang disukai :";
if (isset($_POST['mapel1'])) {
    echo "+" . $_POST['mapel1'] . "<br>";
}
if (isset($_POST['mapel2'])) {
    echo "+ " . $_POST['mapel2'] . "<br>";
}
    if (isset($_POST['mapel3'])) {
    echo "+ " . $_POST['mapel3'] . "<br>";
}
    if (isset($_POST['mapel4'])) {
    echo "+ " . $_POST['mapel4'] . "<br>";
}
if (isset($_POST['mapel5'])) {
    echo "+ " . $_POST['mapel5'] . "<br>";
}
    echo "Total nilai Ijasah : <b>$totalnilai</b><br>";
    echo "email : <b>$email</b><br>";
    echo "Selamat Anda diterima";
}