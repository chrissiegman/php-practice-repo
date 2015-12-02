<?php
// When using a subclass constructor, it is important to remember to call the parent class's constructor to ensure
// all initialization code is executed

$object = new Tiger();

echo "Tigers have...<br>";
echo "Fur: "     . $object->fur     . "<br>";
echo "Stripes: " . $object->stripes . "<br>";

class Wildcat {
    public $fur;

    function __construct() {
        $this->fur = "TRUE";
    }
}

class Tiger extends Wildcat {
    public $stripes;

    function __construct() {
        parent::__construct();   // calling parent constructor WITHIN child constructor
        $this->stripes = "TRUE";
    }
}

?>
