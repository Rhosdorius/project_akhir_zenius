<?php
include "../includes/connection.php";
?>
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body style="width: 100%;">
    <div class="" style="justify-content: center;">
        <h1><?php echo $judul ?></h1>
    </div>
    <br>
    <div class="" style="width: 80%; justify-content: center; height: 350px;">
        <img style="width: 100%; height: 350px;" src="../picture/<?php echo $gambar ?>" alt="">
    </div>
    <br>
    <div class="">
        <p><?php echo $konten ?></p>
    </div>
</body>
<script>
    window.print();
</script>

</html>