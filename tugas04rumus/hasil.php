<?php
$nilai1=$_POST['nilai1'];
$nilai2=$_POST['nilai2'];
$bentuk=$_POST['bentuk'];
echo"<h1>Hasil hitung rumus</h1>";
echo"nilai a adalah =$nilai1<br>";
echo"nilai b adalah =$nilai2<br>";
echo"rumus yang dipilih adalah=$bentuk<br>";
if($bentuk==("segitiga")){
    $hasil=(0.5*$nilai1*$nilai2);
    echo"hasil perhitungan rumus adalah=".$hasil;
}
elseif($bentuk==("persegi panjang"))
{
    $hasil=($nilai1*$nilai2);
    echo"hasil perggitungan rumus adalah".$hasil;
}
else{
    $hasil=($nilai1*$nilai2);
    echo"hasil perhitungan =".$hasil;
}
if($hasil<=0){
    echo" maka tidak ada hasil perhitungan";
}

?>
<p><a href="input.php">input data lagi</a></p>   
<p><a href="http://localhost/modul_web1/webportfolio1-master/">balik ke awal</a></p>