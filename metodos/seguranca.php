<?php
    include_once'conexao.php';
    $h = $_SERVER['HTTP_HOST'];
    if(!isset($_SESSION['Nome'])){
       header('Location:pages/examples/sign-in.php');
    }
?>