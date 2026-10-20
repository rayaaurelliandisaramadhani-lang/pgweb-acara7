<?php
/*$i = 2; 
while ($i = 2){
    echo $i. "<br>";
    $i = $i + 1;
}
*/

/*
    for($i=1; $i<100; $i++){
        echo $i."<br>";
    }
*/

    $color = array("black", "white", "blue");

    foreach ($color as $value){
        echo "$value <br>";
    }

    for($i=0; $i<=2; $i++){
        echo $color[$i];
    }
?>