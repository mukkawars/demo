<?php
session_start();
session_destroy();
header('Location: https://localhost/mywebsite/webpage.php');
?>