<?php 
    session_start();
    require 'inc/usersDb.php';
    require 'lib/utils/functions.php';

    if(isset($_POST['id']) && isset($_POST['pwd'])){
        if(!empty($_POST['id']) && !empty($_POST['pwd'])){
            userExist($users, $_POST);
        }else{
            header('Location: login.php?error');
            exit;
        }
    }
