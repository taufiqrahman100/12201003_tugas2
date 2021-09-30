<html>

<head>
    <title> Form input matakuliah</title>
</head>

<body>
    <center>
        <from action="<?=   base_url('matakuliah/cetak');   ?>"
method="post"
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data Matakuliah
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Kode MTK</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="kode" id="kode">
                    </td><p>
                </tr>
                <tr>
                    <th>Nama MTK
                    </th>
                    <td>:</td>
                    <td>
                        <input type="text" name="name" id="nama">
                    </td><p>
                </tr>
                <tr>
                    <th>SKS</th>
                    <td>:</td>
                    <td>
                        <select name="sks" id="sks">
                            <option value="">Pilih SKS</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td cosplan="3" align="center">
                        <input type="submit" value="submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>