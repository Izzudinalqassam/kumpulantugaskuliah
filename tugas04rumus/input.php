<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- atas -->
    <h1>Rumus-Rumus</h1>
    <!-- table -->
    <form action="hasil.php" method="POST">
    <table border="5">
        <tr>
            <td>Nilai 1</td>
            <td><input type="text" name="nilai1"></td>
        </tr>
        <tr>
            <td>nilai 2</td>
            <td><input type="text" name="nilai2"></td>
        </tr>
        <tr>
            <td align="center" colspan="2"><input type="radio" name="bentuk" value="segitiga">segitiga
        <p><input type="radio" name="bentuk" value="persegipanjang" align="center">persegi panjang</p></td>
        </tr>
    </table>
    <p><input type="submit" name="submit" value="Hitung">
    <input type="reset" name="reset" value="Batal"></p>
</form>
</body>
</html>