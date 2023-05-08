<?php
$cookie_name = "visitor_count";
$cookie_time = time() + (86400 * 30); // 30 days
$visitor_count = 1;

if (isset($_COOKIE[$cookie_name])) {
    $visitor_count = $_COOKIE[$cookie_name] + 1;
}

setcookie($cookie_name, $visitor_count, $cookie_time, "/");

echo "You are visitor number " . $visitor_count . " to this site.";
echo "<br>";
?>

<?php
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];


?>

<?php
sleep(2);
$t = microtime(true);
var_dump(
    $_SERVER['REQUEST_TIME_FLOAT'], 
    $t, 
    $t - $_SERVER['REQUEST_TIME_FLOAT']
);
?>