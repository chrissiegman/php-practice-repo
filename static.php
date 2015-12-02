<?php

User::pwd_string();

class User {
    static function pwd_string() {
        echo "Please enter your password:<br>";
    }
}

$temp = new Test();


echo "Test A: " . Test::$static_property . "<br>";
echo "Test B: " . $temp->get_sp()        . "<br>";
echo "Test C: " . $temp->static_property . "<br>"; // fails because $static_property is not accessible to $temp

class Test {
    static $static_property = "I'm static";

    function get_sp() {
        return self::$static_property;            // self keyword is how to access a static property or constant
                                                  // directly from within a class
    }
}

?>

