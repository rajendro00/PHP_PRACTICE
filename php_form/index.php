<?php
include_once "functions.php"
?>
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
                    <?php
                     $fname = "";
                     $lname = "";
                     $checked = '';

                     if( isset($_GET['cb1']) && $_GET['cb1'] == 1){
                        $checked = 'checked';
                     }
                    ?>
                    <?php if( isset($_GET['fname']) && !empty(($_GET['fname']))) {
                         // $fname = htmlspecialchars($_GET['fname']);
                        // $fname = filter_input( INPUT_GET, 'fname', FILTER_SANITIZE_STRING);
                        $fname = filter_input( INPUT_GET, 'fname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                     }?>
                    <?php if( isset($_GET['lname']) && !empty(($_GET['lname']))) {
                        // $lname = htmlspecialchars($_GET['lname']);
                        // $lname = filter_input( INPUT_GET, 'lname', FILTER_SANITIZE_STRING);
                        $lname = filter_input( INPUT_GET, 'lname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                     }?>
                </p>
                <p>
                <?php if( isset($_GET['fname']) && !empty(($_GET['fname']))){ ?>
                    First Name: <?php echo $fname; ?><br>
                <?php } ?>
                <?php if( isset($_GET['lname']) && !empty(($_GET['lname']))){ ?>
                    Last Name: <?php echo $lname; ?><br>
                <?php } ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form action="">
                    <label for="fname">First Name </label><br>
                    <input type="text" name="fname" id="fname" value="<?php echo $fname; ?>"><br>

                    <label for="lname">Last Name </label><br>
                    <input type="text" name="lname" id="lname" value="<?php echo $lname; ?>"><br>
                    
                    <div>
                        <input type="checkbox" name="cb1" id="cb1" value="1" <?php echo $checked; ?>>
                        <label for="cb1" class="label-inline">Some Checkbox</label>
                    </div>

                    <label class="label">select some fruits</label><br>

                    <input type="checkbox" name="fruits[]" value="orange" <?php isChecked('fruits', 'orange') ?>>
                    <label class="label-inline">Orange</label><br>
                    <input type="checkbox" name="fruits[]" value="mango" <?php isChecked('fruits', 'mango') ?>>
                    <label class="label-inline">Mango</label><br>
                    <input type="checkbox" name="fruits[]" value="banana" <?php isChecked('fruits', 'banana') ?>>
                    <label class="label-inline">Banana</label><br>
                    <input type="checkbox" name="fruits[]" value="lemon" <?php isChecked('fruits', 'lemon') ?>>
                    <label class="label-inline">Lemon</label><br>

                    <button type="submit">Submit</button>
                </form>                
            </div>
        </div>
    </div>

    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>