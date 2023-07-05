<?php

function userExist($users, $searchedUser){
    foreach($users as $user){
        if($searchedUser['id'] === $user['id'] && $searchedUser['pwd'] === $user['pwd']){
            unset($user['pwd']);
            $_SESSION['odyssee']['connected'] = $user;
            header('Location: index.php');
            exit;
        }
    }
    header('Location: login.html');
    exit;
}

function isNotConnected(){
    if(!isset($_SESSION['odyssee']['connected'])){
        header('Location: login.html');
        exit;
    }
}