<?php

session_start();
// request

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty ($_POST['senha']))
    include_once ('configuracao.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT from * usuarios where email = '$email' and senha = $senha";