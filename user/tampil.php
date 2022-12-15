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
    </style>
</head>

<body>
    <div class="w-100">
        <?php include 'navbar.php'; ?>
        <?php include '../includes/connection.php' ?>
    </div>
    <div class="row w-100">
        <div class="col-2 bg-light">
            <?php include 'sidebar.php' ?>
        </div>
        <div class="col border border-top-0 border-bottom-0 border-end-0 pt-3 px-5 pb-5">
            <?php
            $id = $_GET['id'];
            $query = mysqli_query($conn, "SELECT * FROM artikel WHERE id = '$id'");
            while ($data = mysqli_fetch_array($query)) {
                $judul = $data['judul'];
                $waktu = $data['waktu'];
                $gambar = $data['gambar'];
                $konten = $data['konten'];
            }
            ?>
            <div class="fs-6"><a href="list_berita.php" class="btn text-primary">List</a>/<a href="tampil.php" class="btn text-primary">Konten</a></div>
            <div class="h2"><?php echo $judul; ?></div>
            <small class="text-muted"><?php echo $waktu; ?></small>
            <br><br>
            <div class="" style="width:75% ; height:330px;">
                <img src="../picture/<?php echo $gambar; ?>" alt="" class="w-100 h-100 br-10">
            </div>
            <br>
            <div class="me-5 pe-5" style="width:75% ;">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $konten; ?></p>
            </div>
            <div class="w-75 mt-4">
                <a href="download.php?id=<?php echo $id ?>"><input type="button" class="form-control btn btn-primary" value="Download"></a>
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