    <?php 
        $title = "Date and Time";
        include 'includes/header.php' 
    ?>

    <h1><?php echo $title ?></h1>
    <?php
        $datenow = getdate();
        $today = date("D F j Y, \a\\t h.i.s");
        echo "Today's Date: <br/>";
        echo $datenow['mon'] . '<br/>';
        echo $datenow['mday'] . '<br/>';
        echo $datenow['year'] . '<br/>';
        echo '<hr>';
        echo "Today's Date: " . $datenow['mon'] . '/' . $datenow['mday'] . '/' . 
        $datenow['year'] . "<br/>";
        echo '<hr>';
        echo time() . '<br/>';
        echo '<hr>';
        print date("D m/d/y g:i:s a T<br/>") . "<br/>";
        echo '<hr>';
        //a combination of these two are probably easiest to remember 
        print "Today is ";
        print date("D F j Y, \a\\t h.i.s") .'<br/>';
        print date("D m d y, \a\\t h.i.s");
        echo '<hr>';
        echo $today;
    ?>

    <?php require 'includes/footer.php' ?>