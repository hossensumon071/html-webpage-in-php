<?php
include_once "form2-function.php";
$fruits = ["mango", "orange", "banana", "apple", "lemon", "peach"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>html webpage in php</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <style>
        body{
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2>Select/Dropdown</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia a saepe natus itaque cumque iste voluptatibus illum velit aliquam rem?</p>

                <p>
                    <?php
                        if(isset($_POST['fruits']) && $_POST['fruits'] !=''){
                            printf("You have selected: %s", filter_input( INPUT_POST, 'fruits', FILTER_SANITIZE_STRING));
                        }
                    ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form method="POST">
                    <label for="fruits">Select Some Fruits</label>
                    <select name="fruits" id="fruits">
                        <option value="" disabled selected>Select Some Fruits</option>
                        <?php displayOptions($fruits); ?>
                    </select>

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>     
</body>
</html>