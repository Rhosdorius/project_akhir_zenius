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

        .br-25 {
            border-radius: 25px;
        }

        .br-10 {
            border-radius: 10px;
        }

        .link {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="w-100">
        <?php include '../includes/connection.php' ?>
        <?php include 'navbar.php'; ?>
    </div>
    <div class="row w-100">
        <div class="col-2 bg-light">
            <?php include 'sidebar.php' ?>
        </div>
        <div class="col border border-top-0 border-bottom-0 border-end-0 pt-3 px-5 pb-5">
            <?php
            $query2 = mysqli_query($conn, "SELECT * FROM kategori");
            ?>
            <div class="mb-2 fs-6"><a href="list_berita.php" class="btn text-primary">List</a></div>
            <div class="h2">Daftar Berita</div>
            <p>Bermacam-macam berita terkini dan terbukti kevalidannya</p>
            <br>
            <form action="" method="GET" class="mb-5">
                <div class="d-flex justify-content-center mt-1 container">
                    <select class="form-select me-4 form-control" name="sortir">
                        <option selected value="default">Sortir</option>
                        <option value="terbaru">Terbaru</option>
                        <option value="terlama">Terlama</option>
                    </select>
                    <select class="form-select me-4 form-control" id="submenu1" name="kategori">
                        <option selected value="default">Kategori</option>
                        <?php foreach ($query2 as $datas) : ?>
                            <option value="<?php echo $datas['kategoriF'] ?>"><?php echo $datas['kategoriF'] ?></option>
                        <?php endforeach ?>
                    </select>
                    <input type="submit" class="btn btn-success form-control w-50" name="submit" value="Filter">
                </div>
            </form>
            <?php
            $query = mysqli_query($conn, "SELECT * FROM artikel JOIN kategori ON artikel.genre = kategori.id_k");
            $nomor = 1;
            $kategori = "";
            $sortir = "";
            if (isset($_GET['submit'])) {
                $kategori = $_GET['kategori'];
                $sortir = $_GET['sortir'];
                if ($kategori == "default" and $sortir == "default") {
                    $query = mysqli_query($conn, "SELECT * FROM artikel JOIN kategori ON artikel.genre = kategori.id_k");
                    $nomor = 1;
                } else if ($kategori != "default" and $sortir == "default") {
                    $query = mysqli_query($conn, "SELECT * FROM artikel JOIN kategori ON artikel.genre = kategori.id_k  WHERE kategoriF = '$kategori';");
                    $nomor = 1;
                } else if ($kategori == "default" and $sortir != "default") {
                    if ($sortir == 'terbaru') {
                        $query = mysqli_query($conn, "SELECT * FROM artikel JOIN kategori ON artikel.genre = kategori.id_k ORDER BY waktu desc;");
                        $nomor = 1;
                    } else if ($sortir == 'terlama') {
                        $query = mysqli_query($conn, "SELECT * FROM artikel JOIN kategori ON artikel.genre = kategori.id_k ORDER BY waktu;");
                        $nomor = 1;
                    }
                } else {
                    if ($sortir == 'terbaru') {
                        $query = mysqli_query($conn, "SELECT * FROM artikel JOIN kategori ON artikel.genre = kategori.id_k  WHERE kategoriF = '$kategori' ORDER BY waktu desc;");
                        $nomor = 1;
                    } else if ($sortir == 'terlama') {
                        $query = mysqli_query($conn, "SELECT * FROM artikel JOIN kategori ON artikel.genre = kategori.id_k  WHERE kategoriF = '$kategori' ORDER BY waktu;");
                        $nomor = 1;
                    }
                }
            }
            ?>
            <div class="me-5 justify-content-center">
                <?php foreach ($query as $datas) : ?>
                    <a href="tampil.php?id=<?php echo $datas['id'] ?>" class="link">
                        <div class="card ms-5 mb-5 mt-5" style="width: 75% ;">
                            <div class="w-100" style="height: 300px;">
                                <img src="../picture/<?php echo $datas['gambar']; ?>" class="w-100 h-100 bn-50 br-10">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $datas['judul'] ?></h5>
                                <p class="card-text text-dark"><?php echo $datas['mini_konten'] ?></p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item fs-6 text-success"><?php echo $datas['waktu'] ?></li>
                                <li class="list-group-item fs-6 text-success"><?php echo $datas['kategoriF'] ?></li>
                            </ul>
                        </div>
                    </a>
                <?php endforeach ?>
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