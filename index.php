<?php
// memanggil database
include "./connect.php";

// memanggil data visitors
include "./visitors.php";

// memanggil data comments
$data = "SELECT * FROM comment";
$query = mysqli_query($connect, $data);
$cek = mysqli_num_rows($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USK - RPL</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container">
            <h2 class="navbar-brand" href="#home">RPL - BEST</h2>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#profile">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kontak">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="home" class="continer d-flex justify-content-center align-items-center text-center" style="width: 100%; height: 80dvh">
        <div class="content">
            <h2>Selamat Datang di Website</h2>
            <h1 class="text-primary" style="font-weight: 700;">RPL | PPLG | SOFTWARE ENGINEERING</h1>
            <h3>SMK Negeri 1 Bukateja</h3>
            <a href="#profile" class="btn btn-primary mt-3">Selengkapnya</a>
        </div>
    </section>


    <section id="profile" class="container">
        <h1 class="mb-5">Profile</h1>
        <div class="row">
            <div class="col-6">
                <img width="100%" src="./assets/img/rpl-foto.jpeg" alt="Foto RPL | PPLG">
            </div>
            <div class="col-6">
                <h5>Apa itu <span style="font-size: 1.5rem;" class="text-primary">PPLG?</span></h5>
                <p>PPLG ( Pengembangan Perangkat Lunak dan GIM ) merupakan jurusan yang sebelumnya bernama RPL ( Rekayasa Perangkat Lunak ). Perubahan ini dikarenakan ditunjuknya SMK Muhammadiyah 1 Klaten Utara menjadi sekolah Pusat Keunggulan sehingga Kurikulum kelas X mengikuti peraturan yang ada.
                    PPLG berfokus pada keahlian siswa/siswi dalam hal software/program WEB, komputer dan android, selain itu siswa/siswi juga diberikan ilmu umum tentang hardware, multimedia, kewirausahaan.
                </p>

                <br>

                <h5>Visi : </h5>
                <p>Terwujudnya lulusan yang berakhlak mulia, kreatif, inovatif dan kompeten di bidang Pengembangan Perangkat Lunak dan Gim (PPLG)</p>
                <br>

                <h5>Misi : </h5>
                <ol>
                    <li>Menanamkan Iman dan Taqwa terhadap Tuhan Yang Maha Esa</li>
                    <li>Mengembangkan IPTEK sehingga mampu bersaing dalam dunia kerja di era globalisasi dan pasar bebas</li>
                    <li>Mengembangkan sumber daya manusia yang mandiri, bernalar kritis sehingga menghasilkan lulusan yang berkualitas, kompeten dan sesuai dengan kebutuhan dunia kerja</li>
                    <li>Menciptakan suasana yang kondusif dalam setiap proses pembelajaran pada siswa Rekayasa Perangkat Lunak</li>
                    <li>Menjalin kerjasama dengan dunia usaha dan dunia industri yang bergerak di bidang IT</li>
                </ol>
            </div>
        </div>
    </section>


    <section id="kontak" class="container">
        <h1 class="mb-5">Kontak</h1>
        <div class="row">
            <div class="col-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.3474563384143!2d109.42050817357402!3d-7.42674667315638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e65572a528cddab%3A0x578f1a3d93c545f6!2sSMK%20Negeri%201%20Bukateja!5e0!3m2!1sid!2sid!4v1718079598988!5m2!1sid!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="content mt-3">
                    <p class="badge bg-primary">Pengunjung : <?= $data_2 ?> Orang</p>
                    <p class="badge bg-primary">Mengkomen : <?= $cek ?> Orang</p>
                </div>
            </div>

            <form method="post" action="send_comment.php" class="col-6">
                <div class="form-group mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input required type="text" class="form-control" name="nama" id="nama">
                </div>
                <div class="form-group mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input required type="email" class="form-control" name="email" id="email">
                </div>
                <div class="form-group mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea required class="form-control" name="deskripsi" id="deskripsi"></textarea>
                </div>
                <button type="submit" name="addComment" class="btn btn-primary">Kirim</button>
            </form>
        </div>
    </section>


    <footer class="text-center py-2 mt-5">
        <p>By PPLG | SMK Negeri 1 Bukateja</p>
    </footer>


    <script src="./assets/js/bootstrap.js"></script>
</body>

</html>