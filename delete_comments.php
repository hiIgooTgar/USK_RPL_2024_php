<?php

include "./connect.php";

$id = $_GET['id'];
$query = mysqli_query($connect, "DELETE FROM comment WHERE id='$id'");

if ($query) {
    echo "<script>alert('Data berhasil dihapus!');
    window.location.href = 'data_comment.php'</script>";
} else {

    echo "<script>alert('Data berhasil dihapus!');
    window.location.href = 'data_comment.php'</script>";
}
