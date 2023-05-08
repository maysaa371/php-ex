<!DOCTYPE html>
<html>
<head>
    <title>To-Do List</title>
</head>
<body>
    <h1>To-Do List</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="item" placeholder="Enter a new item...">
        <button type="submit" name="add">Add</button>
    </form>
    <?php
        // check if form has been submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // retrieve input value
            $item = $_POST['item'];
            // validate input
            if (!empty($item)) {
                // open file in append mode
                $file = fopen("todo.txt", "a") or die("Unable to open file!");
                // write input value to file
                fwrite($file, $item . "\n");
                // close file
                fclose($file);
            }
        }
        // open file in read mode
        $file = fopen("todo.txt", "r") or die("Unable to open file!");
        // read file line by line and display items in an unordered list
        echo "<ul>";
        while (!feof($file)) {
            $item = fgets($file);
            if (!empty($item)) {
                echo "<li>" . $item . "</li>";
            }
        }
        echo "</ul>";
        // close file
        fclose($file);
    ?>
</body>
</html>