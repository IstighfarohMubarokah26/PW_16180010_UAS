<!DOCTYPE html>
<html>
<head>
        <title> Form Tambah Data Master Barang</title>
</head>
<body>

<h3>Data Master Barang</h3>

<form method="post" action="<?php  echo site_url('barang/proses_tambah'); ?>">
    <table>
        <tr>
            <td>ID</td>
            <td><input type="text" name="id"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Qty</td>
            <td><input type="text" name="qty"></td>
        </tr>
        <tr>
            <td>Price</td>
            <td><input type="text" name="price"></td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="submit" value="Simpan">
                <INPUT type="button" name="batal" value="kembali" onclick="window.history.back()">
            </td>
        </tr>
</table>
</form>

</body>
</html>