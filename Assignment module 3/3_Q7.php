<?php

function Pattern()
 {
    // first line 
    for ($i = 0; $i < 5; $i++) 
    {
        echo "* ";
    }
    echo "<br>";

    //  vertical lines
    for ($i = 0; $i < 3; $i++) 
    {
        echo "*<br>";
    }

    // last line 
    for ($i = 0; $i < 5; $i++)
    {
        echo "* ";
    }
    echo "<br>";
}

Pattern();
?>
