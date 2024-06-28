<?php
session_start();
session_destroy();
echo "<script>alert('Anda berhasil log out'); window.location='login.php';</script>"
?>