<?php
include_once "functions.php";
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
                <h2>Our First Form</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos quam consequatur sed dolore vero dignissimos tenetur, nihil consectetur provident necessitatibus.</p>

                <p>

                    <?php 
                    $fname = '';
                    $lname = '';
                    $checked = '';

                    if(isset($_REQUEST['cb1'] ) &&  $_REQUEST['cb1']==1 ){
                        $checked = 'checked';
                    }
                    print_r($_REQUEST);
                    ?>
                   <?php if ( isset( $_GET['fname']) && !empty($_GET['fname'])) { 
                       $fname = htmlspecialchars($_REQUEST['fname']);
                    } ?>
                   <?php if ( isset( $_GET['lname']) && !empty($_GET['lname'])) { 
                       $lname = htmlspecialchars($_REQUEST['lname']);
                    } ?>

                </p>
                <p>
                    First Name: <?php echo $fname; ?><br/>
                    Last Name: <?php echo $lname; ?>
                </p>
                <?php ?>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form method="GET">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname" value="<?php echo $fname; ?>">

                    <label for="fname">last Name</label>
                    <input type="text" name="lname" id="lname" value="<?php echo $lname; ?>">

                    <div>
                        <input type="checkbox" name="cb1" id="cb1" value="1" <?php echo $checked ?>>
                        <label for="cb1" class="label-inline">Some checkbox</label>
                    </div>

                    <label class="label">Select Some Fruits</label>

                    <input type="checkbox" name="fruits[]" value="orange" <?php isChecked('fruits', 'orange')?>>
                    <label class="label-inline">Orange</label><br/>
                    <input type="checkbox" name="fruits[]" value="mango">
                    <label class="label-inline">Mango</label><br/>
                    <input type="checkbox" name="fruits[]" value="banana">
                    <label class="label-inline">Banana</label><br/>
                    <input type="checkbox" name="fruits[]" value="lemon">
                    <label class="label-inline">lemon</label><br/>


                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>