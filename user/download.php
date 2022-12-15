<?php
ob_start();
include "../includes/connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        h1{
            font-size: 20px;
            font-weight: bold;
            text-align: center;
        }
        .mx-3{
            margin: 3px;
        }
    </style>
</head>

<body style="width: 100%;">
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
    <div class="" style="justify-content: center; text-align: center;">
        <h1 style=""><?php echo $judul ?></h1>
    </div>
    <br>
    <div class="mx-3" style="width: 100%; justify-content: center; height: 300px;">
        <img style="width: 100%; height: 350px;" src="../picture/<?php echo $gambar ?>" alt="">
    </div>
    <br>
    <br>
    <div class="">
        <p>&nbsp;&nbsp;<?php echo $konten ?></p>
    </div>
</body>
</html>
<?php
require './mpdf/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf([
    'mode' => 'utf-8',
    'format' => 'A4',
    'margin_top' => 25,
    'margin_bottom' => 25,
    'margin_left' => 25,
    'margin_right' => 25
]);
$html = ob_get_contents();
ob_end_clean();
$mpdf->writeHTML(utf8_encode($html));
$content = $mpdf->Output("Cetak Pdf", "D");
?>