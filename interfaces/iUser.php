<?php


namespace Interface;

interface iUser{

    public function getInfo();
    public function getUsers();
    public function getUserOnID(int $id);
    public function getUserOnName(string $name);
    public function getUserOnSurname(string $surname);
    public function addUser(Array $data);
    public function setUserOnNameForID(int $id, string $name);







}