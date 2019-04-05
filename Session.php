<?php

require_once 'User.php';


class Session {
    public function login(User $user) {
        $_SESSION['userData'] = $user;
    }

    public function logout() {
       unset( $_SESSION['userData']);
    }

    public function getUser() {
        $user = $_SESSION['userData'];
        return $user;
    }
}
