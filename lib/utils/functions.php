<?php

function isNotConnected(){
    if(!isset($_SESSION['odyssee']['connected'])){
        header('Location: login.php');
        exit;
    }
}

function logout(){
    if(isset($_GET['logout'])){
    unset($_SESSION['odyssee']['connected']);
    header('Location: login.php');
    exit;
    }
}

function userExist($users, $searchedUser){
    foreach($users as $user){
        if($searchedUser['id'] === $user['id'] && $searchedUser['pwd'] === $user['pwd']){
            unset($user['pwd']);
            $_SESSION['odyssee']['connected'] = $user;
            header('Location: index.php');
            exit;
        }
    }
    header('Location: login.php?error');
    exit;
}

function error(){
    if(isset($_GET['error'])){
        $error="erreur de connexion";
    }else{
        $error="";
    }
    return $error;
}

?>