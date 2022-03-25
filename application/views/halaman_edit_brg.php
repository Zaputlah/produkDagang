<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman edit barang</title>
</head>
<body>
    <h3>Halaman edit barang</h3>
    <form action="<?php echo base_url('home/fungsiEdit') ?>" method="post">
    <table>
        <tr>
            <td>id</td>
            <td></td>
            <td><input type="text" name="id" value="<?php echo $queryBrgdetail->id ?>" readonly></td>
        </tr>
        <tr>
            <td>nama</td>
            <td></td>
            <td><input type="text" name="nama" value="<?php echo $queryBrgdetail->nama ?>"></td>
        </tr>
        <tr>
            <td>harga</td>
            <td></td>
            <td><input type="text" name="harga" value="<?php echo $queryBrgdetail->harga ?>"></td>
        </tr>
        <tr>
            <td colspan="4"><button type="submit">Edit Barang</button></td>
        </tr>
    </table>
    </form>
    
</body>
</html>