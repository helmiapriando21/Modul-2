<?php
session_start();
if (!isset($_SESSION["data"])) {
    $_SESSION["data"] = array();
}
function register(){
    array_push($_SESSION["data"], ['nama'=>$_POST["nama"], 'password'=>$_POST["password"], 'email'=>$_POST["email"]]);
    header('Location: Login.php');
    exit;
}
function login(){
    foreach ($_SESSION["data"] as $data){
        if($data["nama"] == $_POST["nama"] && $data["password"] == $_POST["password"]){
            $_SESSION["user_data"] = $data;
            header('Location: home.php');
            exit;
        }
    }
}

if (isset($_POST["register"])){
    register();
}elseif(isset($_POST['login'])){
    login();
}