<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>
            Form
        </title>
    </head>
    <body>
        <form class="form" action="validation.php" method="post" id="registration_form">
            <div class="subtitle">Enter the data to be saved in the Database</div>
            <div class="input-container ic2">
                <input type="text" class="input" id="name" name="name"/>
                <label for="name" class="placeholder">Name</label>
            </div>
            <div class="input-container ic2">
                <input type="text" class="input" id="description" name="description"/>
                <label for="description" class="placeholder">Description</label>
            </div>
            <div class="input-container ic2">
                <input type="text" class="input" id="quantity" name="quantity"/>
                <label for="quantity" class="placeholder">Quantity</label>
            </div>
            <div class="input-container ic2">
                <input type="text" class="input" id="price" name="price"/>
                <label for="price" class="placeholder">Price</label>
            </div>
            <div class="input-container ic2">
                <input type="text" class="input" id="added_by" name="added_by"/>
                <label for="added_by" class="placeholder">Added By</label>
            </div>
            <button type="submit" class="submit">Click To Insert Data In DataBase</button>
        </form>
    </body>
</html>




  
















