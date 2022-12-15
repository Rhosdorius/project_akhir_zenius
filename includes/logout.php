<script>
    alert('Berhasil Logout');
</script>

<?php
session_start();
session_unset();
session_destroy();
echo"<script>document.location.href = '../user/beranda.php';</script>";
?>