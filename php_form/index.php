<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    
    <div class="container mx-auto">
        <div class="row mx-auto">
            <div class="col-lg-12">
                <h2> Our First Form </h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, eveniet!</p>
                <p>
                    <?php if( isset($_GET['fname']) && !empty(($_GET['fname']))){ ?>
                    First Name:<?php echo $_GET['fname']; ?> <br>
                    <?php } ?>
                    <?php IF( isset($_GET['lname']) && !empty(($_GET['lname']))) {?>
                    Last Name: <?php echo $_GET['lname']; ?>  <br>
                    <?php } ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form action="">
                    <label for="fname">First Name </label><br>
                    <input type="text" name="fname" id="fname"><br>

                    <label for="lname">Last Name </label><br>
                    <input type="text" name="lname" id="lname"><br>

                    <button type="submit">Submit</button>
                </form>                
            </div>
        </div>
    </div>

    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>