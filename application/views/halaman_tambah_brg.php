<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman tambah barang</title>
</head>
<body>
    <h3>Halaman tambah barang</h3>
    <form action="<?php echo base_url('home/fungsiAdd') ?>" method="post">
    <table>
        <tr>
            <td>id</td>
            <td></td>
            <td><input type="text" name="id"></td>
        </tr>
        <tr>
            <td>nama</td>
            <td></td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>harga</td>
            <td></td>
            <td><input type="text" name="harga"></td>
        </tr>
        <tr>
            <td colspan="4"><button type="submit">Tambah Barang</button></td>
        </tr>
    </table>
    </form>
</body>
</html>