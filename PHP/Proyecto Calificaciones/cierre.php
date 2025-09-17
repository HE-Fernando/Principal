<?php
session_start();
session_unset();
session_destroy();
header("Location: /Principal/PHP/Proyecto Calificaciones/login.php");
?>