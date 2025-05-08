<?php

namespace App;


class User extends \Core\AbstractDatabase implements \Interface\iUser{

    use \Trait\tUser;

    public function getUsers():Array
    {
        $sql = "SELECT * FROM `users`";
        $data = [];
        $res = mysqli_query($this->link, $sql);
        while($row = mysqli_fetch_assoc($res)){
            $row['regdate'] = date('Y-m-d', $row['regdate']);
            $data[] = $row;
        }
        return $data;
    }

    public function getUserOnID(int $id):Array
    {
        $sql = "SELECT * FROM `users` WHERE `id` = $id";
        $res = mysqli_query($this->link, $sql);
        if($res->num_rows > 0){
            return mysqli_fetch_assoc($res);
        }else{
            return [];
        }
    }

    public function getUserOnName(string $name): Array
    {
        $sql = "SELECT * FROM `users` WHERE `name` = '$name'";
        $res = mysqli_query($this->link, $sql);
        if($res->num_rows > 0){
            return mysqli_fetch_assoc($res);
        }
        return [];
    }

    public function getUserOnSurname(string $surname): Array
    {
        $sql = "SELECT * FROM `users` WHERE `surname` = '$surname'";
        $res = mysqli_query($this->link, $sql);
        if($res->num_rows > 0){
            return mysqli_fetch_assoc($res);
        }
        return [];
    }

    public function addUser(Array $data): bool
    {
        if(!is_array($data) || count($data) == 0) return false;
        $name = $data['name'];
        $surname = $data['surname'];
        $lastname = $data['lastname'];
        $age = $data['age'];
        $login = $data['login'];
        $password = $data['password'];
        $regdate = time();

        $sql = "INSERT INTO `users` (`name`, `surname`, `lastname`, `age`, `login`, `password`, `regdate`)VALUES(
            '$name','$surname', '$lastname', '$age', '$login', '$password', '$regdate'
        )";
        $res = mysqli_query($this->link, $sql);
        if($res === true) return true;
        return false;
    }

    public function setUserOnNameForID(int $id, string $name):bool
    {
        if(empty($name)) return false;
        $sql = "UPDATE `users` SET `name`= '$name' WHERE `id` = $id";
        $res = mysqli_query($this->link, $sql);
        if($res === true){
            return true;
        }
        return false;
    }






}