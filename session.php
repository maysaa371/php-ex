<?php
session_start();
echo session_id().'<br>';
if (isset($_SESSION ['counter'])){
    $_SESSION ['counter']++;
    
}
else{
    $_SESSION['counter']=1;
}

?>


<html>
    <body>
<h1> you have visited page : <?php echo $_SESSION['counter'] ?> times</h1>
    </body>
</html>