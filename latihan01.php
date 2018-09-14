<html>
<head><title> Sistem Raport Sederhana</title></head>
<body>
    <FORM ACTION="proseslatihan.php" METHOD="POST" NAME="Input">
    <h2> Sistem Raport Sederhana</h2>
    <table>

    <tr>
    <th>Nama</th>
    <td> : </td>
    <td>
    <input type="text" name="nama" size="50"><br>        
    </td>
    </tr>

    <tr>
    <th> Nis  </th>
    <td> : </td>
    <td> <input type="number" name="nis"><br> </td>
    </tr>

    <tr>
    <th> Alamat </th>
    <td> : </td>
    <td> <textarea name="alamat" cols="50" rows="10"></textarea></td>
    </tr>

    <tr>
    <th>Jenis kelamin</th>
    <td> : </td>
    <td><input type="radio" name="jeniskelamin" value="Laki-laki" checked>Laki-Laki
        <input type="radio" name="jeniskelamin" value="Prempuan"> Prempuan<br></td>
    </tr>

    <tr>
    <th>Agama</th>
    <td>:</td>
    <td><select name="Agama">
    <option value="Islam">Islam</option>
    <option value="Kristen">Kristen</option>
    <option value="Budha">Budha</option>
    <option value="Hindu">Hindu</option>
    </select> </td>
    </tr>

    <tr>
    <th>Asal Sekolah</th>
    <td> : </td>
    <td> <input type="text" name="Asalsekolah" size="50"</td>
    </tr>

    <tr>
    <th>Nama Orang Tua/Wali</th>
    <td> : </td>
    <td> <input type="text" name="namaOrtu" size="50"</td>
    </tr>

    <tr>
    <th>Mata Pelajaran Yang disukai</th>
    <td> : </td>
    <td><input type="checkbox" name="mapel1" value="Matematika"> Matematika
        <input type="checkbox" name="mapel2" value="Ilmu pengetahuan Alam"> Ilmu pengetahuan Alam
        <input type="checkbox" name="mapel3" value="Ilmu pengetahuan Sosial">Ilmu pengetahuan Sosial<br>
        <input type="checkbox" name="mapel4" value="Pendidikan Agama Islam">Pendidikan Agama Islam
        <input type="checkbox" name="mapel5" value="Bahasa Indonesia">Bahasa Indonesia<br></td>
    </tr>

    <tr>
    <th>Total nilai Ijasah</th>
    <td> : </td>
    <td> <input type="text" name="Nilai" size="50" </td>
    </tr>

    <tr>
    <th>Email</th>
    <td> : </td>
    <td> <Input type="Email" name="email" size="50" </td>
    </tr>

    <tr>
    <center>
    <td><input type="submit" name="Input" value="Input"></td>
    </center>
    </tr>
    </table>

</body>
</html>