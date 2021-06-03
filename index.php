<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Index</title>
</head>
<body>
    <h2>Follow each link to the page example</h2>
    <ul>
        <li><a href="array.php">Simple Array and Printouts</a></li>
        <li><a href="forloop.php">Simple For Loop</a></li>
        <li><a href="whileldowhileoop.php">Simple While & Dowhile Loop</a></li>
        <li><a href="ifstatement.php">Simple If Statement</a></li>
        <li><a href="switchstatement.php">Simple Switch Statement</a></li>
    </ul>
    <!-- HTML -->
    <h1> Stan Lee's Word of the Day </h1>
    <br/>

    <?php 
        //PHP
        echo '<p>Wolverine</p>';
        echo '<br/>';
        echo 'Storm';
        echo '<br/>';
    ?>
        <!-- huh -->
    <?php
        //PHP
        //variables 
        $name = 'AjS';
        $age = '21';
        $other = 'Anthony';
        $get = 'crazy';
        $crazy = 'get';
        //print statements 
        echo $name; 
        echo '<h1> My name is ' .$name. ' it\'s short for ' .$other.'</h1>';
        echo '<h1> My age is ' .$age. '</h1>';
        //this looks easier? 
        echo "I loved $age it's fun<br/>";
        //using the variables different ways 
        echo $name. ' = '. $other;
        echo '<br/>';
        echo "$crazy $get<br/>";
        echo $crazy . ' ' .$get;
        echo '<br/>';
        echo $crazy . $get; //this one has no space, unless a space is added 
        echo '<br/>';

    ?>


</body>
</html>