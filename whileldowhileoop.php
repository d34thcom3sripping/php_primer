<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - While & Do-While Loops</title>
</head>
<body>
    <h1>While Loops</h1>
    <?php
        // INFINITE LOOP EXAMPLE 
        // $count = 0;
        // while($count < 10) {
        //    echo '<p>I AM LESS THAN TEN</p>';
        // }

        // PRE-CONDITION LOOP
        $count = 0;
        while($count < 10) {
            echo '<p>I AM LESS THAN TEN</p>';
            $count++;
        }

        echo 'EXIT LOOP';
    ?>

    <h1>Do-While Loops</h1>
    <?php
        // POST-CONDITION LOOP
        $count = 0;
        do {
            echo '<p>I AM A DO WHILE LOOP</p>';
            $count++;
        }
        while($count < 10);
        echo 'EXIT LOOP';
    ?>
</body>
</html>