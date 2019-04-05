<?php

require_once 'User.php';
require_once 'Storage.php';
require_once 'Session.php';



session_start();

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


$session = new Session();

$storage = new Storage();
$user = $storage->getUserByEmail($email);
// tutaj mamy pełne dane usera

if (md5($password) != $user->password) {
  echo 'Spadaj!!';

  // "wylogowanie" użytownika - wyczyszczenie jego danych z sesji
  $session->logout();
  die();
}
// zalogowanie usera:
$session->login($user);


header('Location: dashboard.php');
