    <?php 
        $title = 'String Manipulation';
        include 'includes/header.php' 
    ?>

    <h1><?php echo $title ?></h1>
    <?php
        // string concatination
        $phrase1 = "The word of the day is";
        $phrase2 = "fancy";
        $name = "ajS";
        $title = "is a proper title";
        $yell = "is me yelling";
        $whisper = "IS ME WHISPERING";
        echo $phrase1 . " big and " . $phrase2;
        echo "</br>";
        echo "<hr>";
        //apparently break tags don't need to be explicit 
        echo 'My initials are ' . ucfirst($name).'</br>';
        echo 'This' . " " . ucwords($title).'<br/>';
        echo 'THIS' . " " . strtoupper($yell).'</br>';
        echo 'this' . " " . strtolower($whisper).'</br>';
        echo 'this' . " " . strtolower("IS ME NOT YELLING").'</br>';
        echo "<hr>";
        echo 'Repeat ' . str_repeat('b', 4) . "<br/>";
        echo 'Repeat ' . strtoupper(str_repeat('b', 4)) . "<br/>";
        echo "Extracted: " . substr($phrase1, 4, 15) . '<br/>';
        echo 'String position: ' . strpos($name, 'j') . '<br/>';
        echo 'Find "a": ' . strchr($name, 'a').'<br/>';
        echo 'Find "j": ' . strchr($name, 'j').'<br/>';
        echo 'Find "s": ' . strchr($name, 's').'<br/>';
        echo 'Find "S": ' . strchr($name, 'A').'<br/>';
        echo "<hr>";
        echo 'Length is ' . strlen($name).'<br/>';
        echo "<hr>";
        echo "Not Trimmed: " . " A B C D " . "E" ."<br/>";
        echo "Trimmed: " . trim(" A B C D ") . "E" ."<br/>";
        echo "Trim Left: " . ltrim(" A B C D ") . "E" ."<br/>";
        echo "Trim Right: " . rtrim(" A B C D ") . "E" ."<br/>";
        echo '<hr>';
        echo "Replace: " . str_replace('WHISPERING', 'MADRE', $whisper) . "<br/>";

    ?>    

    <?php require 'includes/footer.php' ?>