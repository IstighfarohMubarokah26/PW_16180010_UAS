<!DOCTYPE html>
<html>
<head>
        <title> Form Update Data Master Barang</title>
</head>
<body>

<h3>Data Update Master Barang</h3>

<form method="post" action="<?php  echo site_url('barang/proses_update'); ?>">
    <table>
        <tr>
            <td>ID</td>
            <td><input type="text" name="id" value="<?php echo $mbarang->id; ?>" readonly="readonly"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="name" value="<?php echo $mbarang->name; ?>"></td>
        </tr>
        <tr>
            <td>Qty</td>
            <td><input type="text" name="qty" value="<?php echo $mbarang->qty; ?>"></td>
        </tr>
        <tr>
            <td>Price</td>
            <td><input type="text" name="price" value="<?php echo $mbarang->price; ?>"></td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="submit" value="Update">
                <INPUT type="button" name="batal" value="kembali" onclick="window.history.back()">
            </td>
        </tr>
</table>
</form>

</body>
</html>