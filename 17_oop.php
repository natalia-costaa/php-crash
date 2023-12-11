<?php
class User {
    // Propertires are atributtes that belong to a class
   // Access Modifiers: public, private, protected
  // public - can be accessed from anywhere
  // private - can only be accessed from inside the class
  // protected - can only be accessed from inside the class and by inheriting classes
    private $name;
    public $email;
    public $password;

    //Method is a function that belongs to a class
    function set_name($name) {
        $this->name = $name;
    }
}

//Instatiate a user object
$user1 = new User();

$user1->set_name('Brad');

var_dump($user1);