<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mata Angin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .bn-50 {
            filter: brightness(50%);
        }

        .bn-80 {
            filter: brightness(80%);
        }

        .br-25 {
            border-radius: 25px;
        }

        .br-10 {
            border-radius: 10px;
        }

        .of {
            object-fit: cover;
        }

        .link {
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body>
    <div class="w-100">
        <?php include '../includes/navbar.php'; ?>
    </div>
    <div class="row w-100">
        <div class="col-2 bg-light">
            <?php include '../includes/sidebar.php' ?>
            <?php include '../includes/connection.php' ?>
        </div>
        <?php
        $query = mysqli_query($conn, "SELECT * FROM artikel ORDER BY rand() LIMIT 3");
        $query2 = mysqli_query($conn, "SELECT * FROM artikel ORDER BY rand() LIMIT 1");
        $internasional = mysqli_query($conn, "SELECT * FROM artikel WHERE genre = 4 ORDER BY waktu desc LIMIT 3");
        $nasional = mysqli_query($conn, "SELECT * FROM artikel WHERE genre = 3 ORDER BY waktu desc LIMIT 3");
        $hiburan = mysqli_query($conn, "SELECT * FROM artikel WHERE genre = 2 ORDER BY waktu desc LIMIT 3");
        $olahraga = mysqli_query($conn, "SELECT * FROM artikel WHERE genre = 1 ORDER BY waktu desc LIMIT 3");
        while ($data = mysqli_fetch_array($query2)) {
            $judul = $data['judul'];
            $mini_konten = $data['mini_konten'];
            $waktu = $data['waktu'];
            $gambar = $data['gambar'];
        }
        ?>
        <div class="col border border-top-0 border-bottom-0 border-end-0 pt-3 px-5 pb-5">
            <div class="mb-2 fs-6"><a href="list_berita.php" class="btn text-primary">Beranda</a></div>
            <div class="h2 mb-1">Mata Angin</div>
            <p class="mb-3">Bermacam-macam berita terkini dan terbukti kevalidannya</p>
            <div id="carouselExampleControls" class="carousel slide justify-content-center" data-bs-ride="carousel" style="width:100% ;">
                <div class="carousel-inner">
                    <div class="carousel-item active" style="height:300px ; background-image: #ffffff; background-size: 100%;">
                        <img src="../picture/<?php echo $gambar ?>" class="d-block w-100 h-100 of br-10 bn-50" alt="...">
                        <h3 style="position:absolute;width:100%;bottom:0;text-align:center;" class="mb-4 text-light"><?php echo $judul ?></h3>
                    </div>
                    <?php foreach ($query as $data) : ?>
                        <div class="carousel-item" style="height:300px ; background-image: #ffffff; background-size: 100%;">
                            <img src="../picture/<?php echo $data['gambar'] ?>" class="d-block w-100 h-100 of br-10 bn-50" alt="...">
                            <h3 style="position:absolute;width:100%;bottom:0;text-align:center;" class="mb-4 text-light"><?php echo $data['judul'] ?></h3>
                        </div>
                    <?php endforeach ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="d-flex w-100">
                <div class="mt-5 mb-3 text-start">
                    <h3>Internasional</h3>
                    <hr class="w-25" style="border: 2px solid black;">
                    <br>
                    <?php foreach ($internasional as $internasionalData) : ?>
                        <a href="tampil.php?id=<?php echo $internasionalData['id'] ?>" class="link">
                            <div class="card mb-3 me-3" style="max-width: 540px; ">
                                <div class="d-flex w-100" style="height:158px ;">
                                    <div class="" style="width:40% ;">
                                        <img src="../picture/<?php echo $internasionalData['gambar'] ?>" class="img-fluid rounded-start w-100 h-100" alt="...">
                                    </div>
                                    <div class="" style="width:62% ;">
                                        <div class="card-body">
                                            <h6 class="card-title"><?php echo $internasionalData['judul'] ?></h6>
                                            <p class="card-text" style="font-size:12px ;" class="text-dark"><?php echo $internasionalData['mini_konten'] ?></p>
                                            <p class="card-text" style="font-size:12px ;"><small class="text-muted"><?php echo $internasionalData['waktu'] ?></small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php endforeach ?>
                </div>
                <div class="mt-5 mb-3 text-start">
                    <h3>Olahraga</h3>
                    <hr class="w-25" style="border: 2px solid black;">
                    <br>
                    <?php foreach ($olahraga as $olahragaData) : ?>
                        <a href="tampil.php?id=<?php echo $olahragaData['id'] ?>" class="link">
                            <div class="card mb-3 me-3" style="max-width: 540px; ">
                                <div class="d-flex w-100" style="height:158px ;">
                                    <div class="" style="width:40% ;">
                                        <img src="../picture/<?php echo $olahragaData['gambar'] ?>" class="img-fluid rounded-start w-100 h-100" alt="...">
                                    </div>
                                    <div class="" style="width:62% ;">
                                        <div class="card-body">
                                            <h6 class="card-title"><?php echo $olahragaData['judul'] ?></h6>
                                            <p class="card-text" style="font-size:12px ;" class="text-dark"><?php echo $olahragaData['mini_konten'] ?></p>
                                            <p class="card-text" style="font-size:12px ;"><small class="text-muted"><?php echo $olahragaData['waktu'] ?></small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php endforeach ?>
                </div>
            </div>

            <div class="d-flex w-100">
                <div class="mt-5 mb-3 text-start">
                    <h3>Nasional</h3>
                    <hr class="w-25" style="border: 2px solid black;">
                    <br>
                    <?php foreach ($nasional as $nasionalData) : ?>
                        <a href="tampil.php?id=<?php echo $nasionalData['id'] ?>" class="link">
                            <div class="card mb-3 me-3" style="max-width: 540px; ">
                                <div class="d-flex w-100" style="height:158px ;">
                                    <div class="" style="width:40% ;">
                                        <img src="../picture/<?php echo $nasionalData['gambar'] ?>" class="img-fluid rounded-start ob w-100 h-100" alt="...">
                                    </div>
                                    <div class="" style="width:62% ;">
                                        <div class="card-body">
                                            <h6 class="card-title"><?php echo $nasionalData['judul'] ?></h6>
                                            <p class="card-text" style="font-size:12px ;" class=""><?php echo $nasionalData['mini_konten'] ?></p>
                                            <p class="card-text" style="font-size:12px ;"><small class="text-muted"><?php echo $nasionalData['waktu'] ?></small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php endforeach ?>
                </div>
                <div class="mt-5 mb-3 text-start">
                    <h3>Hiburan</h3>
                    <hr class="w-25" style="border: 2px solid black;">
                    <br>
                    <?php foreach ($hiburan as $hiburanData) : ?>
                        <a href="tampil.php?id=<?php echo $hiburanData['id'] ?>" class="link">
                            <div class="card mb-3 me-3" style="max-width: 540px; ">
                                <div class="d-flex w-100" style="height:158px ;">
                                    <div class="" style="width:40% ;">
                                        <img src="../picture/<?php echo $hiburanData['gambar'] ?>" class="img-fluid rounded-start ob w-100 h-100" alt="...">
                                    </div>
                                    <div class="" style="width:62% ;">
                                        <div class="card-body">
                                            <h6 class="card-title"><?php echo $hiburanData['judul'] ?></h6>
                                            <p class="card-text" style="font-size:12px ;" class=""><?php echo $hiburanData['mini_konten'] ?></p>
                                            <p class="card-text" style="font-size:12px ;"><small class="text-muted"><?php echo $hiburanData['waktu'] ?></small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
    <div class="w-100">
        <?php include "../includes/footer.php"; ?>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>