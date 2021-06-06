    <?php 
        $title = "Home";
        include 'includes/header.php' 
    ?>

    <!-- HTML -->
    <h1 style="text-align: center;"><?php echo $title ?></h1>
    <br/>

    <?php 
        //PHP
        echo '<p>Wolverine</p>';
        echo '<br/>';
        echo 'Storm';
        echo '<br/>';
    ?>
        <!-- huh -->
    <a href="https://www.marvel.com" target="_blank" class="btn btn-dark">I'm a button, click me</a>
    <br/>

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

    <?php require 'includes/footer.php' ?>