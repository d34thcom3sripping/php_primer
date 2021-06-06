    <?php 
        $title = "Array";
        include 'includes/header.php' 
    ?>

    <h1><?php echo $title ?></h1>
    <?php
        //variable 
        $num = 5;

        //homogenous array 
        $numbers = array(1,2,3,4,5,6,7,8,9,10);

        echo $numbers[5];

        echo "<p>$numbers[9]</p>";

        $size = count($numbers);
        echo "<p>Array numbers is: $size</p>";

        for($count = 0; $count < $size; $count++) {
            echo "<p>$numbers[$count]</p>";
        }
    ?>

    <?php require 'includes/footer.php' ?>