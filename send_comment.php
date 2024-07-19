<?php

include "./connect.php";

if (isset($_POST['addComment'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $deskripsi = $_POST['deskripsi'];
    $time_date = date("Y-m-d H:i:s");

    $add = "INSERT INTO comment(id, nama, email, deskripsi, time_date) VALUES(NULL, '$nama', '$email', '$deskripsi', '$time_date')";
    $query = mysqli_query($connect, $add);

    if ($query) {
        echo "<script>alert('Pesan anda berhasil terkirim');
        window.location.href = './'</script>";
    } else {

        echo "<script>alert('Pesan anda gagal terkirim');
        window.location.href = './'</script>";
    }
}
