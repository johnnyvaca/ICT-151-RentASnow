<?php
$user ="yogo-jv@hotmail.com";
$pass ="1234";

session_start();
if ($_POST['email'] == $user && $_POST['password'] == $pass){

    $_SESSION["login"] = $user;
    header('Location: http://localhost:800/index.php?action=home');
    exit();


}else{
    header('Location: http://localhost:800/index.php?action=login');
    exit();
}
?>