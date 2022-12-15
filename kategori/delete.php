<?php
    include_once("../includes/connection.php");
    $id = $_GET['id'];
    $query = "DELETE FROM kategori WHERE id_k='$id'";
    mysqli_query($conn,$query);
    if(isset($query)){
        echo"<script>
        alert('Delete Kategori Sukses');
        document.location.href = 'main.php';
        </script>";
    }
    else{
        echo"<script>
        alert('Gagal Delete');
        document.location.href = 'main.php';
        </script>";
    }
?>