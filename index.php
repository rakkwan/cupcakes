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

        <?php
            $flavors = array("grasshopper" => "The Grasshopper",
                             "maple" => "Whiskey Maple Bacon",
                             "carrot" => "Carrot Walnut",
                             "caramel" => "Salted Caramel Cupcake",
                             "velvet" => "Red Velvet",
                             "lemon" => "Lemon Drop",
                             "tiramisu" => "Tiramisu");

            foreach ($flavors as $flavor => $option)
            {
                echo '<div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label" for="gridCheck">
                                <input class="form-check-input" type="checkbox" name="flavor[]" value="'.$flavor.'"';
                                if (isset($_POST['flavors']) && in_array($flavor, $_POST['flavors']))
                                {
                                    echo 'checked';
                                }
                                echo '>' . $option .

                            '</label>' .
                        '</div>'.
                    '</div>';
            }
        ?>

        <p><input type="submit" class="btn btn-primary btn-sm" name="submit" value="Order"></p>
    </form>

    <?php

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $errors = [];

            if (empty($_POST['name']))
            {
                $errors[] = "Please enter your name.";
            }
            else
            {
                $name = filter_var($_POST['name']);
            }

            if (empty($_POST['flavors'])) {
                $errors[] = "Please pick your flavor!";
            }

            if (empty($errors))
            {
                displayMessage();
                echo '<p>Order Summary:</p><ul>';
                foreach ($_POST['flavors'] as $option)
                {
                    echo '<li>$flavors[$option]</li></ul>';
                }

                calculate();
            }

        }

        function displayMessage()
        {
            echo '<p>Thank you, ' . $_POST['name'] . ' for your order!</p>';
        }

        function calculate()
        {
            echo '<p>Order Total: $ ' . number_format(sizeof($_POST['flavors']) * 3.5, 2). '</p>';
        }
    ?>


</div>

</body>
</html>

