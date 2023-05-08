<?php
if(isset($_GET["name"]) ||isset($_GET["age"]) ){
    echo "HI". "  " .$_GET['name']."<br>";
    exit();
}
?>
<html>
    <body>
        <form action="<?php $_PHP_SELF ?>" method="GET">
           Name:<input type="text" name="name"/>
           Age : <input type="text" name="age"/>
           <input type="submit" />
        </form>
    </body>
</html>