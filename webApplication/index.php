<?php

if(!$_SESSION['user']){
    header('Location: sources/view/login/loginForm.php');
    exit();
}