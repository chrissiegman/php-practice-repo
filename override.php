<?php

$object = new Son;
$object->test();
$object->test2();

class Dad {

    function test() {
        echo "[Class Dad] I am your Father<br>";
    }

}

class Son extends Dad {

    function test() {
        echo "[Class Son] I am Luke<br>"; // overrides the test() method from the parent class
    }

    function test2() {
        parent::test();                   // uses the parent class's test() method
    }

}

?>
