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

    // A constructor is a method that runs when an object is created
    public function __construct(){
        echo 'constructor ran';
    }

    //Method is a function that belongs to a class
    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }
}

//Instatiate a user object
$user1 = new User();
