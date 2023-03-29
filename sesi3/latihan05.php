<?php
    $age = array(" peter"=>"35"," ben"=>"37", " joe"=>"43");

    //print_r($age);

    //echo "umur dari peter ".$age ["peter"];
    foreach($age as $p => $u ){
        echo $p . " umurnya ". $u;
        echo "<br>";
    }
        