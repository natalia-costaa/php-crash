<?php
class User {
    // Propertires are atributtes that belong to a class
    public $name;
    public $email;
    public $password;

    
}

//Instatiate a user object
$user1 = new User();

$user1->name = 'Brad';

echo $user1->name;