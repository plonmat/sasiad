<?php

require_once 'User.php';
require_once 'Storage.php';

if (isset($_POST['name']) && !empty($_POST['name'])) {
    $name = $_POST['name'];
//var_dump($name);
} else {
    echo "Enter your name";
    die();
}
if (isset($_POST['surname']) && !empty($_POST['surname'])) {
    $surname = $_POST['surname'];
} else {
    echo "Enter your surname";
    die();
}
if (isset($_POST['email']) && !empty($_POST['email'])) {
    $email = $_POST['email'];
} else {
    echo "Enter your email";
    die();
}
if (isset($_POST['password']) && !empty($_POST['password'])) {
    $password = $_POST['password'];
} else {
    echo "Enter your password";
    die();
}
if (isset($_POST['repassword']) && !empty($_POST['repassword'])) {
    $repassword = $_POST['repassword'];
    if ($password != $repassword) {
        echo "Repeat your password";
    }
} else {
    echo "Enter your password";
    die();
}

$user = new User();
$user->name = $name;
$user->surname = $surname;
$user->email = $email;
$user->password = $password;
$user->hashPassword();

$storage = new Storage();
$storage->createRegDir();
$storage->isUserRegistered($user);
$storage->saveUser($user);

?>

<html>
<a href="loginFORM.php">LOGOWANIE</a>
</html>
