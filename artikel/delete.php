<?php
    include_once("../includes/connection.php");
    $id = $_GET['id'];
    $query = "DELETE FROM artikel WHERE id='$id'";
    mysqli_query($conn,$query);
    if(isset($query)){
        echo"<script>
        alert('Data Berhasil Dihapus');
        document.location.href = 'main.php';
        </script>";
    }
    else{
        echo"<script>
        alert('Gagal Menghapus');
        document.location.href = 'main.php';
        </script>";
    }
?>