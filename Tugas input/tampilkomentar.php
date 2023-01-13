<html lang="en">
<head>
    <title>Data Komentar</title>
</head>
<body>
    <h1 align="center">Data komentar anda</h1><br>
    <hr>
    <?php
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $komentar = $_POST['komentar'];
    echo "<p align='center'>Nama Anda : $nama</p>";
    $gender = $_POST['gender'];
    $asal = $_POST['asal'];
    $hobi1=$_POST['hobi1'];
    $hobi2=$_POST['hobi2'];
    $hobi3=$_POST['hobi3'];
    echo "<p align='center'>Email Anda : $email</p>";
    echo "<p align='center'>Komentar Anda : $komentar</p>";
    echo "<p align='center'> jenis kelamin anda : $gender</p>";
    echo "<p align='center'> asal kota anda : $asal</p>";
    echo "<p align='center'> hobi anda : $hobi1,","$hobi2,","$hobi3";

    ?>
    <p align="center"><a href="forminputkomentar.php">INPUT DATA LAGI</a></p>
    <p align="center"><a href="http://localhost/modul_web1/webportfolio1-master/">balik ke awal</a></p>
</body>
</html>