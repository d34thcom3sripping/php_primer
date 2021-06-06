<?php 
    $title = 'Functions';
    include 'includes/header.php' 
?>

    <h1><?php echo $title ?> </h1>
    <?php
        function writeMessage() {
            echo "My first function <br/>";
        }

        writeMessage();
        echo '<hr>';

        //function with parameters; passing by value 
        function addFunction($num1, $num2) {
            $sum = $num1 + $num2;
            echo "The sum of $num1 and $num2 is $sum <br/>";
        }

        addFunction(10, 20);
        $num2 = 40;
        addFunction('10', $num2);
        echo '<hr>';

        //passing by reference 
        function changeNum(&$num) {
            $num += 10;
        }

        $num = 500;
        changeNum($num);
        echo $num .'<br/>';
        echo '<hr>';

        function returnProduct($num1, $num2) {
            $prod = $num1 * $num2;
            return $prod;
        }

        $return_value = returnProduct(10, 20);
        echo $return_value;
    ?>

    <?php require 'includes/footer.php' ?>