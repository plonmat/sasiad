<?php

require_once 'User.php';

class Storage {

    public function createRegDir() {
        if (!file_exists('regUsers/')) {
            mkdir('regUsers/');
            echo "Folder created.<br>";
        }
    }

    public function isUserRegistered(User $user) {
        $fileName = $this->getFileNameForUser($user);

        if (file_exists('regUsers/' . $fileName)) {
            echo "User exists and will be overwritten.";
        }
    }
    public function getUserByEmail(string $email) {
        $filename = md5($email);
        if (!file_exists('regUsers/')) {
            echo 'Folder does not exist, will be created.';
            mkdir('regUsers');
        }
        if (file_exists('regUsers/'. $filename)) {
            $userReg = file_get_contents('regUsers/'. $filename);
            $user = unserialize($userReg);

            return $user;

        } else {
            echo "User not registered.";

            die();
        }
    }

    public function getFileNameForUser(User $user)
    {
        return md5($user->email);
    }

    public function saveUser(User $user) {
        $fileName = $this->getFileNameForUser($user);
        $serialized = serialize($user);
        file_put_contents('regUsers/' . $fileName, $serialized);
        echo "User registred as <b>{$fileName}<b>.<br>";
    }
}
