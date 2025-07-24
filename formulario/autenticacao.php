<?php
session_strat();
if(isset($_SESSION['usuario']) == false)
  header('location:formulario.php');
?>
