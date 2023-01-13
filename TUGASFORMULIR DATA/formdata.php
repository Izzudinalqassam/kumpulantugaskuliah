<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Registrasi</title>
</head>
<body>
    <!-- KEPALA -->
    <div>
        <div>
            <h1>FORM REGISTRASI</h1>
            <HR></HR>
        </div>
    </div>
    <!-- isi -->
    <div>
        <div>
            <form action="HASILDATA.PHP" method="POST">
            <p>isi data dibawah ini:</p>
            <p>Nama &emsp;&emsp;&emsp;&emsp;&emsp; <input type="text" name="nama"> </p>
            <p>alamat &emsp;&emsp;&emsp;&emsp;&emsp;<textarea name="alamat" cols="30" rows="10"></textarea></p>
            <p>Tempat lahir &emsp;&emsp;&ensp; <input type="text" name="ttl"> </p>
            <p>Tanggal lahir &emsp;&emsp;&ensp;<input type="date" name="tgl"> </p>
            <p>Jenis Kelamin anda <input type="radio" name="gender" value="laki-laki">Laki-Laki 
            <input type="radio" name="gender" value="perempuan"> Perempuan</p>
            <p>Pendidikan &emsp;&emsp;&emsp;&ensp;<select name="pendidikan">
                <option value="S1">S1</option>
                <option value="D3">D3</option>
                <option value="SMA">SMA</option>
            </select> </p>
            <P><input type="submit" name="submit">
            <input type="reset" name="Cancel" value="Cancel"></P>
            </form>
        </div>
    </div>
    
</body>
</html>