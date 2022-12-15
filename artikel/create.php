<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mata Angin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="w-100">
        <?php include '../includes/navbar.php'; ?>
    </div>
    <?php
    include '../includes/connection.php';
    ?>
    <div class="row w-100">
        <div class="col-2 bg-light" style="height: 100vh ;">
            <?php include '../includes/sidebar.php' ?>
        </div>
        <div class="col border border-top-0 border-bottom-0 border-end-0 pt-3 px-5 pb-5">
            <?php $query = mysqli_query($conn, "SELECT * FROM kategori"); ?>
            <div class="mb-2 fs-6"><a href="main.php" class="btn text-primary">Artikel</a>/<a href="create.php" class="btn text-primary">Tambah</a></div>
            <div class="h2 mb-3"> Tambah Artikel Berita</div>
            <form action="" method="POST" class="border border-1 px-3 py-3" enctype="multipart/form-data">
                <div class="">
                    <span>Judul</span><br>
                    <input type="text" class="form-control mt-2" placeholder="Judul" name="judul">
                </div>
                <div class="pt-2">
                    <span>Kategori</span><br>
                    <select name="kategori" id="kategori" class="form-select mt-2">
                        <option selected>Opsi</option>
                        <?php foreach ($query as $list) : ?>
                            <option value="<?php echo $list['id_k'] ?>"><?php echo $list['kategoriF'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="pt-2">
                    <span>Gambar</span><br>
                    <input type="file" class="form-control mt-2" name="gambar">
                </div>
                <div class="pt-2">
                    <span>Konten</span><br>
                    <textarea name="konten" id="" cols="30" rows="10" class="form-control mt-2"></textarea>
                </div>
                <div class="pt-2">
                    <span>Mini Konten</span><br>
                    <input type="text" class="form-control mt-2" name="mini_konten">
                </div>
                <div class="pt-2">
                    <span>Waktu</span><br>
                    <input type="datetime-local" class="form-control mt-2" name="waktu">
                </div>
                <div class="pt-3">
                    <input type="submit" class="btn btn-primary w-100" name="submit">
                </div>
            </form>
        </div>
    </div>
    <div class="w-100">
        <?php include '../includes/footer.php'; ?>
    </div>
    <?php
    if (isset($_POST['submit'])) {
        $judul = $_POST['judul'];
        $kategori = $_POST['kategori'];
        $gambar = $_FILES['gambar']['name'];
        $file_tmp = $_FILES['gambar']['tmp_name'];
        move_uploaded_file($file_tmp,'../picture/'.$gambar);
        $konten = $_POST['konten'];
        $mini_konten = $_POST['mini_konten'];
        $waktu = $_POST['waktu'];
        $sql = "INSERT into artikel (judul,genre,gambar,konten,mini_konten,waktu) VALUES ('$judul','$kategori','$gambar','$konten','$mini_konten','$waktu');";
        $datas = $conn->query($sql);
        echo "<script>
        alert('Tambah Artikel Baru Sukses');
        document.location.href = 'main.php';
        </script>";
    } ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>