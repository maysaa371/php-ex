

<?php
if(isset($_POST["name"]) ||isset($_POST["age"]) ){
    echo "HI". $_POST['name']."<br>";
    exit();
}
?>
<html>
    <body>
        <form action="<?php $_PHP_SELF ?>" method="POST">
           Name:<input type="text" name="name"/>
           Age : <input type="text" name="age"/>
           <input type="submit" />
        </form>
    </body>
</html>