<?php
// Final methods prevent a subclass from overriding a superclass method

class User {

    final function copyright() {
        echo "This class was written by Joe Smith";
    }
}

?>
