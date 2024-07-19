<?php

include "./connect.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data List Comment</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
</head>

<body>
    <div class="container py-4">
        <h1 class="mb-5">Data Komentar</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Post Tanggal</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $a = 1;

                $data = "SELECT * FROM comment ORDER BY time_date DESC";
                $query = mysqli_query($connect, $data);

                $cek = mysqli_num_rows($query);
                if ($cek == 0) {
                    echo "<h2 class='text-center my-3 py-2 bg-danger text-white'>Data kosong</h2>";
                }

                while ($list = mysqli_fetch_assoc($query)) {
                ?>
                    <tr>
                        <td scope="row"><?= $a++ ?></td>
                        <td><?= $list['nama'] ?></td>
                        <td><?= $list['email'] ?></td>
                        <td><?= $list['deskripsi'] ?></td>
                        <td><?= $list['time_date'] ?></td>
                        <td>
                            <a href="./delete_comments.php?id=<?= $list['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda ingin menghapus?');">Hapus</a>
                        </td>
                    </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>

    <script src="./assets/js/bootstrap.js"></script>
</body>

</html>