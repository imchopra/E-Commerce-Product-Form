<?php
    require('databaseconnection.php');
    $errors = [];

    if(!empty($_POST['id'])){
        $id = $_POST['id'];
    } else {
        $id = null;
        $errors[] = "<p> Error!!!! User ID is required!!</p>";
    }

    if(!empty($_POST['name'])){
        $name = $_POST['name'];  
    } else {
        $name = null;
        $errors[] = "<p> Error!!!! Name is required!!</p>";
    }
    if(!empty($_POST['description'])){
        $description = $_POST['description'];  
    } else {
        $description = null;
        $errors[] = "<p> Description is required!!</p>";
    }
    if(!empty($_POST['quantity'])){
        $quantity = $_POST['quantity'];  
    } else {
        $quantity = null;
        $errors[] = "<p> Quantity is required!!</p>";
    }
    if(!empty($_POST['price'])){
        $price = $_POST['price'];  
    } else {
        $price = null;
        $errors[] = "<p> Price is required!!</p>";
    }
    if(!empty($_POST['added_by'])){
        $added_by = $_POST['added_by'];  
    } else {
        $added_by = null;
        $errors[] = "<p> This is required!!</p>";
    }

    if(count($errors) == 0){
        
        $query = "UPDATE product SET name = ? , description = ?, quantity = ?, price = ?, added_by = ? WHERE  id = ?;";
        
        $stmt = mysqli_prepare($dbc, $query);
        
        mysqli_stmt_bind_param(
            $stmt,
            'ssssss',
            $name,
            $description,
            $quantity,
            $price,
            $added_by,
            $id
        );
        
        $result = mysqli_stmt_execute($stmt);
        
        if($result){
            header("Location: fetch_data.php");
            exit;
        } else {
            echo "</br>Some error in Saving the data";
        }
        
    } else {
        foreach($errors as $error){
            echo $error;
        }
    }
?>