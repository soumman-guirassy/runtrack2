<?php
for ($i = 0; $i <= 100; $i++) { 
    if ($i <= 20) {
        echo "<i>$i</i><br>";
    }elseif ($i == 42){
        echo "La Plateforme!<br>";
    } 
    elseif ($i >= 25 || $i <= 50) {
        echo "<u>$i</u><br>";
    } 
}
