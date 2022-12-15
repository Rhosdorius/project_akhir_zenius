<?php
    include_once("../includes/connection.php");
    $id = $_GET['id'];
    $query = "DELETE FROM user WHERE id='$id'";
    mysqli_query($conn,$query);
    if(isset($query)){
        echo"<script>
        alert('Data Berhasil Dihapus');
        document.location.href = 'main.php';
        </script>";
    }
    else{
        echo"<script>
        alert('Data Gagal Dihapus');
        document.location.href = 'main.php';
        </script>";
    }
?>