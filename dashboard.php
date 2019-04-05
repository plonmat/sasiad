<?php

require_once  'User.php';
require_once 'Session.php';
session_start();


if(!isset($_SESSION['userData'])){
  echo "User unlogged!";
  die();
}
//var_dump($_SESSION);

$session = new Session();
$user = $session->getUser();

echo 'Witaj '. $user->name. ' '. $user->surname. '!!';
