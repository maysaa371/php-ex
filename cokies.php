<?php

setcookie('name','id',time()+60,'/');
echo "<pre>";
var_dump($_COOKIE);
?>