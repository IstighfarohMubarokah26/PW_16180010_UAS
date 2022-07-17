<!DOCTYPE html>
<html>
<head>
        <title> Data Master Barang</title>
<!-- Latest compiled and minified CSS -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">

<script type="text/javascript" src="<?php echo base_url('assets/bootstrap.min.js'); ?>"></script>
</head>
<body>

<div class="container">
<h3>Data Master Barang</h3>
<a class="btn btn-primary" href="<?php echo site_url('barang/tambah'); ?>">Tambah Data</a>

<table class="table table-stripped">
    <thead>
        <tr>
        <th>No</th>
        <th>ID</th>
        <th>Nama</th>
        <th>QTY</th>
        <th>Price</th>
        <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        $no=1;
        foreach($mbarang as $brg): ?>
        <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $brg['id']; ?></td>
            <td><?php echo $brg['name']; ?></td>
            <td><?php echo $brg['qty']; ?></td>
            <td><?php echo $brg['price']; ?></td>
            <td>
                <a class="btn btn-warning" href="<?php echo site_url('barang/edit/' . $brg['id']); ?>">
                <i class="glyphicon glyphicon-edit"></i>
                </a>
                <a class="btn btn-danger" href="<?php echo site_url('barang/hapus/' . $brg['id']); ?>" onclick=" return confirm('Yakin mau menghapus data ini ?')">
                <i class="glyphicon glyphicon-trash"></i>
                </a>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
    <tfoot>
    </tfoot>
</table>
</div>

</body>
</html>


