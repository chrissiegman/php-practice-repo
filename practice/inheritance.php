<?php
// Subclass an existing class using the 'extends' operator

$object           = new Subscriber;
$object->name     = "Fred";
$object->password = "passwd";
$object->phone    = "012 345 6789";
$object->email    = "fred@example.com";

$object->save_user();
$object->display();

class User {
    public $name, $password;

    function save_user() {
        echo "Save user code goes here.<br>";
    }
}

class Subscriber extends User {
    public $phone, $email;

    function display() {
        echo "Name: "  . $this->name     . "<br>";
        echo "Pass: "  . $this->password . "<br>";
        echo "Phone: " . $this->phone    . "<br>";
        echo "Email: " . $this->email    . "<br>";
    }
}

?>
