<?php


class User {
    public $name;

    public $surname;

    public  $email;

    public $password;

    public function hashPassword(){
        $this->password = md5($this->password);
    }
}

