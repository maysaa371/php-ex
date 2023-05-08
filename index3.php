<?php
if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $car_name = $_POST['car_name'];
    $color_name = $_POST['color_name'];

    $query = "UPDATE table3 SET car_name = :car_name, Color_name = :color_name WHERE id = :id";
    $statement = $conn->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->bindValue(':car_name', $car_name);
    $statement->bindValue(':color_name', $color_name);
    $result = $statement->execute();
    if($result) {
        header("Location: index.php");
    } else {
        echo "Error updating record.";
    }
}

?>