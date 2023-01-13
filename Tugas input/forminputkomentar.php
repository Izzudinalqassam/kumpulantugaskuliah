<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LatihanSoalPert5(1)</title>
</head>
<body>

    <h1>BUKU TAMU</h1>
    <P>Komentar dan saran anda sangat kami butuhkan <br>
untuk meningkatkan kualitas situs kami</P>
<hr>
<form action="tampilkomentar.php" method="POST">
    Nama anda &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" name="nama" size="25"><br>
    Email anda&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" name="email" size="25"><br>
    Komentar anda&nbsp;:<textarea name="komentar" id="" cols="30" rows="10"></textarea><br>
    <p>Jenis Kelamin anda :<input type="radio" name="gender" value="laki-laki">Laki-Laki
    <input type="radio" name="gender" value="perempuan">Perempuan</p>
    <p>asal kota anda :<select name="asal" value="asal">
        <option value="pilih">-pilih-</option>
        <option value="jakarta">jakarta</option>
        <option value="bandung">bandung</option>
        <option value="bogor">bogor</option>
    </select></p>
    <p>HOBI ANDA :</p>
    <p><input type="checkbox" name="hobi1" value="basket">BASKET</p>
    <p><input type="checkbox" name="hobi2" value="sepak bola">SEPAK BOLA</p>
    <p><input type="checkbox" name="hobi3" value="badminton">BADMINTON</p>
    <input type="submit"value="kirim" name="kirim">
    <input type="reset"value="batal">
</form>
    
</body>
</html>