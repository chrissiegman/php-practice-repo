<?php

class User{}

$alice = new User();
$alice->username = "Alice";
$alice->password = "password";

printf("Username: %s<br>Password: %s<br>", $alice->username, $alice->password);

?>
