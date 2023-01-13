<?php
//rtable atas
$n="NO";
$k="KODE BARANG";
$nm="NAMA BARANG";
$h="HARGA";
$s="STOK";
$total="TOTAL HARGA";
//daftar nama barang
$nm1="Laptop";
$nm2="Printer";
$nm3="Flashdisk";
$nm4="MODEM 4G";
$nm5="Harddisk";
$nm6="Philodendron";
$nm7="Aglonema Legacy";
$nm8="Alocasia";
//DAFTAR HARGA
$h1="5000000";
$h2="150000";
$h3="50000";
$h4="200000";
$h5="500000";
$h6="60000";
$h7="250000";
$h8="75000";
//stockbarang
$s1="5";
$s2="20";
$s3="50";
$s4="20";
$s5="3";
$s6="10";
$s7="20";
$s8="2";
//totalharga
$t1=$h1*$s1;
$t2=$h2*$s2;
$t3=$h3*$s3;
$t4=$h4*$s4;
$t5=$h5*$s5;
$t6=$h6*$s6;
$t7=$h7*$s7;
$t8=$h8*$s8;
echo"<h1 align='center'>Penggunaan Operator Matematika Pada Data Barang</h1>";
echo"<hr style='height: 2px;border: width 0;color:black;background-color:black'>";
echo"<table width='700' border='5' align='center' bordercolor='#818582'>
<tr><td bgcolor='#818582'>$n</td><td bgcolor='#818582'>$k</td><td bgcolor='#818582'>$nm</td><td bgcolor='#818582'>$h</td><td bgcolor='#818582'>$s</td><td bgcolor='#818582'>$total</td></tr>
<tr><td>1</td><td>B002</td><td>$nm1</td><td>$h1</td><td>$s1</td><td>$t1</td></tr>
<tr><td>2</td><td>B003</td><td>$nm2</td><td>$h2</td><td>$s2</td><td>$t2</td></tr>
<tr><td>3</td><td>B004</td><td>$nm3</td><td>$h3</td><td>$s3</td><td>$t3</td></tr>
<tr><td>4</td><td>B005</td><td>$nm4</td><td>$h4</td><td>$s4</td><td>$t4</td></tr>
<tr><td>5</td><td>B006</td><td>$nm5</td><td>$h5</td><td>$s5</td><td>$t5</td></tr>
<tr><td>6</td><td>B007</td><td>$nm6</td><td>$h6</td><td>$s6</td><td>$t6</td></tr>
<tr><td>7</td><td>B008</td><td>$nm7</td><td>$h7</td><td>$s7</td><td>$t7</td></tr>
<tr><td>8</td><td>B009</td><td>$nm8</td><td>$h8</td><td>$s8</td><td>$t8</td></tr>
</table>";

?>