<?php
echo "Nama Lengkap :";
if (isset($_POST['nama'])) {
    echo $_POST['nama'];
    echo "<br>";
}
echo "Tempat Lahir :";
if (isset($_POST['tempat'])) {
    echo $_POST['tempat'];
    echo "<br>";
}
echo "Tanggal Lahir :";
if (isset($_POST['tanggal'])) {
    echo $_POST['tanggal'];
    echo "<br>";
}
echo "Jenis Kelamin :";
if (isset($_POST['jk'])) {
    echo $_POST['jk'];
    echo "<br>";
}
echo "Alamat :";
if (isset($_POST['alamat'])) {
    echo $_POST['alamat'];
    echo "<br>";
}
echo "Agama :";
if (isset($_POST['agama'])) {
    echo $_POST['agama'];
    echo "<br>";
}
?>