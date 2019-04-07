<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cupcake</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">

</head>
<body>
<div class="jumbotron">
    <h1>Cupcake Fundraiser</h1>
</div>

<div class="container">
    <form action="index.php" method="post">
        <div class="form-group">
        <label>Your name: <input type="text" class="form-control" name="name" placeholder="Please input your name."
                             value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>"></label>

        </div>
        <p>Cupcake flavors:</p>
        <p><input type="checkbox" name="flavors[]" value="The Grasshopper"
                <?php if (isset($_POST['flavors']) && in_array("The Grasshopper", $_POST['flavors']))
                    echo 'checked'; ?> >The Grasshopper</p>
        <p><input type="checkbox" name="flavors[]" value="Whiskey Maple Bacon"
                <?php if (isset($_POST['flavors']) && in_array("Whiskey Maple Bacon", $_POST['flavors']))
                    echo 'checked'; ?> >Whiskey Maple Bacon</p>
        <p><input type="checkbox" name="flavors[]" value="Carrot Walnut"
                <?php if (isset($_POST['flavors']) && in_array("Carrot Walnut", $_POST['flavors']))
                    echo 'checked'; ?> >Carrot Walnut</p>
        <p><input type="checkbox" name="flavors[]" value="Salted Caramel Cupcake"
                <?php if (isset($_POST['flavors']) && in_array("Salted Caramel Cupcake", $_POST['flavors']))
                    echo 'checked'; ?> >Salted Caramel Cupcake</p>
        <p><input type="checkbox" name="flavors[]" value="Red Velvet"
                <?php if (isset($_POST['flavors']) && in_array("Red Velvet", $_POST['flavors']))
                    echo 'checked'; ?> >Red Velvet</p>
        <p><input type="checkbox" name="flavors[]" value="Lemon Drop"
                <?php if (isset($_POST['flavors']) && in_array("Lemon Drop", $_POST['flavors']))
                    echo 'checked'; ?> >Lemon Drop</p>
        <p><input type="checkbox" name="flavors[]" value="Tiramisu"
                <?php if (isset($_POST['flavors']) && in_array("Tiramisu", $_POST['flavors']))
                    echo 'checked'; ?> >Tiramisu</p>

        <p><input type="submit" class="btn btn-primary btn-sm" name="submit" value="Order"></p>



</div>

</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: jrakk
 * Date: 4/3/2019
 * Time: 8:58 PM
 */