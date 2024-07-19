<?php

$connect = mysqli_connect('localhost', 'root', '', 'usk_rpl');

if (!$connect) {
    die('Koneksi data tidak terhubung');
}
