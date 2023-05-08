<?php

$name="m";
// Create a cookie with the name 'mycookie', value '12345', and an expiration time of 1 hour
setcookie('mycookie', '12345');

// Retrieve all cookie values
$cookies = $_COOKIE;

// Print all cookie values
foreach ($cookies as $name => $value) {
    echo $name . ' = ' . $value . '<br>';
}

// Delete the 'mycookie' cookie
setcookie('mycookie', '', time() - 3600, '/', '', false, true);

?>
