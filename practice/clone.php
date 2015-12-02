<?php

$object1 = new User;
$object1->name = "Bob";
$object1->password = "mypass";
print_r($object1); echo "<br>";

$object2 = clone $object1;
$object2->name = "Alice";
print_r($object2); echo "<br>";


$object1->save_user();
$object2->save_user();

class User
{
    public $name, $password;

    function save_user() {
        echo "Save User code here<br>";
    }
}

?>
