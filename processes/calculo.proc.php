<?php

if (isset($_post['submit'])) {
    $cuenta = $_POST['cuenta'];
    $servicio = $_POST['servicio'];
    $personas = $_POST['personas'];
    //echo $cuenta;
    //echo $servicio;
    //echo $personas;
    $formula =((float)$cuenta*(float)$servicio)/(float)$personas;
    header("location:../index.php?res=".$formula);
}else{
    header("location:../index.php");
}
?>
