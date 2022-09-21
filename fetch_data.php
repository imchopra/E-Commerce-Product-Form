<?php
    require('databaseconnection.php');

    $query = 'SELECT * FROM product;'; // replace with paramertized query using mysqli_stmt_bind_param for asynchronous work task
    $results = @mysqli_query($dbc,$query); // print_r($results);
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>
            User Details
        </title>
    </head>
    <body>
        <table width="80%">
            <thead>
                <tr align="left">
                    <th>ID</th>
                    <th>Sr. No.</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Added By</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sr_no=0;
                while($row=mysqli_fetch_array($results,MYSQLI_ASSOC))
                {
                  $sr_no++;
                  $str_to_print="<tr><td>{$row['id']}</td>";
                  $str_to_print.="<td>$sr_no</td>";
                  $str_to_print.="<td>{$row['name']}</td>";
                  $str_to_print.="<td>{$row['description']}</td>";
                  $str_to_print.="<td>{$row['quantity']}</td>";
                  $str_to_print.="<td>{$row['price']}</td>";
                  $str_to_print.="<td>{$row['added_by']}</td>";
                  $str_to_print.="<td>
             <a href='update_form.php?id={$row['id']}'>Edit</a> |
            <a href='delete_operation.php?id={$row['id']}'>Delete</a> 
                         </td>";
                         
                         echo $str_to_print;
                }
                ?>
            </tbody>
        </table>
    </body>
</html>