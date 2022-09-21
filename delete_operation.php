<?php
    require('databaseconnection.php');
    
    $error=null;
    
    if(empty($_GET["id"]))
    {
        echo"<p>ID not Found.</p>";
        exit;
    }
    else
    {
        $id=$_GET["id"];
        
        $query="delete from product where id=?";
        $stmt=mysqli_prepare($dbc,$query);
        mysqli_stmt_bind_param(
            $stmt,
            'i',
            $id
            );
            $result=mysqli_stmt_execute($stmt);
            
            if($result)
            {
                header("Location: fetch_data.php");    
            }
            else
            {
                echo"<br>Some Error in deleting"; 
            }
    }
    
    
    
    
    
    



