<?php
session_start();
include('conexao.php');

if(empty($_POST['user']) || empty($_POST['password'])){
    header("Location: ../index.php");
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['user']);
$senha = mysqli_real_escape_string($conexao, $_POST['password']);

$query = "SELECT `ID`, `userName` FROM `user` WHERE userName = '{$usuario}' and userPassword = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['user'] = $usuario;
    header('Location: view\painel\painel.php');
    exit();
} else {
    header("Location: ../index.php");
    $_SESSION['nao_autenticado'] = true;
    exit();
}