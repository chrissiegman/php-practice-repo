<?php

class User {

    function __construct($username, $password) {
        // constructor code goes here
        $this->username = $username;
        $this->password = $password;
    }

    function print_info() {
        print "Username: $this->username<br>";
        print "Password: $this->password<br>";
    }

    function change_info($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    function __destruct(){
        print "Destroying $this->username";
    }
}

$bob = new User('Bob', '123');

$bob->print_info();
$bob->change_info('Robert', 'password');
$bob->print_info();


?>
