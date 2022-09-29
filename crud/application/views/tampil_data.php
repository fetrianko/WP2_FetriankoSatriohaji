<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data</title>
</head>
<body>
    <center>
        <h1>Data Mahasiswa</h1>
    </center>
    <table style="margin: 20px auto;" border="1">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
            <th>Action</th>
        </tr>
        <?php 
            $no = 1;
            foreach($mahasiswa as $u): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $u->nim ?></td>
                <td><?= $u->nama ?></td>
                <td><?= $u->alamat ?></td>
                <td><?= $u->pekerjaan ?></td>
                <td>
                    <?= anchor('kampus/edit/'.$u->id,'Edit'); ?>
                    <?= anchor('kampus/hapus/'.$u->id,'Hapus'); ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <center>
            <?= anchor('kampus/tambah', '<input type="button" value="Tambah Data">'); ?>
        </center>
    </table>
</body>
</html>