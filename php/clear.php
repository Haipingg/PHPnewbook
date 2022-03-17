<?php
 session_start();
 unset($_SESSION["book_id"]);
 session_destroy();
 header("Location: shiyan.php");
?>