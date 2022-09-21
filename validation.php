<!-- Validation PHP CODE -->

<?php
    require('databaseconnection.php');

    $errors=[];
    
    if(empty($_POST["name"]))
    $errors[]="<p>Name is required</p>";
    else
        $name=$_POST["name"];
           
           if(empty($_POST["description"]))
    $errors[]="<p>Description is required</p>";
    else
        $description=$_POST["description"];
           
           if(empty($_POST["quantity"]))
    $errors[]="<p>quantity is required</p>";
    else
        $quantity=$_POST["quantity"];
           
           if(empty($_POST["price"]))
    $errors[]="<p>price is required</p>";
    else
        $price=$_POST["price"];

        if(empty($_POST["added_by"]))
        $errors[]="<p>added_by is required</p>";
        else
            $added_by=$_POST["added_by"];
        
    if(count($errors)>0)
    {
        foreach($errors as $error)
        echo $error;
        
        echo '<br><a href="main.php">Go Back</a>';
    }
    else
    {
        $query="INSERT INTO product (name,description,quantity,price,added_by)
        VALUES(?,?,?,?,?)";
        
        $stmt=mysqli_prepare($dbc,$query);
        
        mysqli_stmt_bind_param(
            $stmt,
            'sssss',$name,$description,$quantity,$price,$added_by
            );
            
            echo "Executing statement";
            $result=mysqli_stmt_execute($stmt);
            echo "MYSQLI error : " . mysqli_error($dbc);
            if($result)
            {
                header("Location: fetch_data.php");
                exit();
            }
            else
            {
                echo"<br>Some Error in saving the data";    
            }
    }
?>