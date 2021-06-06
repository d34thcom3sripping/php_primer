    <?php 
        $title = 'While Loops';
        include 'includes/header.php' 
    ?>

    <h1><?php echo $title ?></h1>
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
    <br/>

    <?php require 'includes/footer.php' ?>