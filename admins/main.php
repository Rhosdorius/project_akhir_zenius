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
        <div class="col-2 bg-light" style="">
            <?php include '../includes/sidebar.php' ?>
        </div>
        <div class="col border border-top-0 border-bottom-0 border-end-0 pt-3 px-5 pb-5">
            <div class="mb-2 fs-6"><a href="main.php" class="btn text-primary">Admin</a></div>
            <div class="h2">Data Admin</div>
            <div class="w-100 mt-3">
                <table class="table table-hover table-dark">
                    <thead class="text-center">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Status</th>
                        <th>Email</th>
                        <th>No Telepon</th>
                        <th>#</th>
                    </thead>
                    <?php
                    $query = mysqli_query($conn, "SELECT * FROM admins");
                    $nomor = 1;
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <TBody class="text-center">
                            <TR>
                                <th><?php echo $nomor++; ?></th>
                                <th><?php echo $row['nama']; ?></th>
                                <th><?php echo $row['username']; ?></th>
                                <th><?php echo $row['status']; ?></th>
                                <th><?php echo $row['email']; ?></th>
                                <th><?php echo $row['nomor']; ?></th>
                                <th>
                                    <a href="show.php?id=<?php echo $row['id'] ?>"><button type="button" class="btn btn-success">Tampil</button></a>
                                </th>
                            </TR>
                        </TBody>
                    <?php
                    };
                    ?>
                </table>
            </div>
        </div>
    </div>
    <div class="w-100">
        <?php include '../includes/footer.php'; ?>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>