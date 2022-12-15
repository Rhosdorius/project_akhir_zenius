<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mata Angin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="">
    <div class="w-100 justify-content-center mt-4 text-center">
        <img src="../picture/logo.png" class="img-thumbnail w-25 bg-transparent border-0" alt="...">
    </div>
    <div class="text-center w-100 d-flex justify-content-center">
        <form action="" method="POST" class="w-50 mt-3 justify-content-center">
            <input class="form-control mt-3 bg-light text-secondary me-3 ms-3" type="text" placeholder="Username" name="username">
            <input class="form-control mt-3 bg--light text-secondary me-3 ms-3" type="password" placeholder="Password" name="password">
            <input class="form-control mt-3 bg-dark text-light me-3 ms-3" type="submit" value="Login" name="submit">
        </form>
    </div>

    <?php
    include '../includes/connection.php';

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM admins WHERE username = '$username' and password = '$password'";
        $datas = $conn->query($sql);
        $check = mysqli_num_rows($datas);
        if ($check != 0) {
            $_SESSION['username'] = $username;
            $_SESSION['status'] = "login";
            echo $_SESSION['username'];
            echo "<script>
            alert('Welcome Admin');
            document.location.href = 'beranda.php';
            </script>";
        } else {
            echo "<script>
            alert('Username atau Password Salah');
            document.location.href = 'login.php';
            </script>";
            $_SESSION['error'] = "Gagal Login";
        }
    }
    ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>