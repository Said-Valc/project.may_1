<?php


namespace Core;


abstract class AbstractDatabase{

    protected $link;

    public function __construct()
    {
        $this->link = mysqli_connect('localhost', 'root', '', 'projects_may.project1');
    }

}