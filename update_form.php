<?php
    require('databaseconnection.php');

    $error = null;
    if(!empty($_GET['id'])){
        $id = $_GET['id'];
    } else {
        $id = null;
        $error = "<p> Error! User Id not found.";
    }

    if($error == null){
        $query = "SELECT * FROM product WHERE id = $id;";// replace with paramertized query using mysqli_stmt_bind_param
        $result = @mysqli_query($dbc, $query);
        
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $name = $row['name'];
            $description = $row['description'];
            $quantity = $row['quantity'];
            $price = $row['price'];
            $added_by = $row['added_by'];
        } // else-> inccorect entry in db
    } else {
        echo $error;
        exit();
    }
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>
            Updation Form
        </title>
    </head>
    <body>
        <form class="form" action="update_operation.php" method="post"  id="update_details_form">
            <div class="subtitle">Please enter the data to update the record in the Database</div>
            <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
            <div class="input-container ic2">
                <input type="text" class="input" id="name" name="name" value="<?php echo $name; ?>"/>
                <label for="name" class="placeholder">Name</label>
            </div>
            <div class="input-container ic2">
                <input type="text" class="input" id="description" name="description" value="<?php echo $description; ?>"/>
                <label for="description" class="placeholder">Description</label>
            </div>
            <div class="input-container ic2">
                <input type="text" class="input" id="quantity" name="quantity" value="<?php echo $quantity; ?>"/>
                <label for="quantity" class="placeholder">Quantity</label>
            </div>
            <div class="input-container ic2">
                <input type="text" class="input" id="price" name="price" value="<?php echo $price; ?>"/>
                <label for="price" class="placeholder">Price</label>
            </div>
            <div class="input-container ic2">
                <input type="text" class="input" id="added_by" name="added_by" value="<?php echo $added_by; ?>"/>
                <label for="added_by" class="placeholder">added_by</label>
            </div>
            <button type="submit" class="submit">Update Data</button>
        </form>
    </body>
</html>






