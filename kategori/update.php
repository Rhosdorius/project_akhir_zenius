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
    $id = $_GET['id'];
    $sql = "SELECT * FROM kategori WHERE id_k = '$id'";
    $datas = $conn->query($sql);
    while ($data = mysqli_fetch_array($datas)) {
        $kategori = $data['kategoriF'];
    }
    ?>
    <div class="row w-100">
        <div class="col-2 bg-light">
            <?php include '../includes/sidebar.php' ?>
        </div>
        <div class="col border border-top-0 border-bottom-0 border-end-0 pt-3 px-5 pb-5">
            <div class="mb-2 fs-6"><a href="main.php" class="btn text-primary">Kategori</a>/<a href="update.php" class="btn text-primary">Edit</a></div>
            <div class="h2 mb-3">Edit Kategori</div>
            <form action="" method="POST" class="border border-1 px-3 py-3">
                <div class="">
                    <span>Kategori</span><br>
                    <input type="text" class="form-control mt-2" placeholder="Kategori" name="kategori" value="<?php echo $kategori ?>">
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
        $kategori = $_POST['kategori'];
        $sql = "UPDATE kategori SET kategoriF = '$kategori' WHERE id_k = $id;";
        $datas = $conn->query($sql);
        echo "<script>
        alert('Update Kategori Sukses');
        document.location.href = 'main.php';
        </script>";
    } ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>