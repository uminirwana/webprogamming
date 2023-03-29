<?php
    $mhs = array(
        array ("umi nirwana","2201010557","denpasar"),
        array ("desy pudensiana","2201010443","labuan bajo"),
        array("nadia febrian","2201010737","lombok timur"),
        array("febumentam","2201010223","indonesia"),

    );
    foreach ($mhs as $idx => $dta){
        echo "data ke-".$idx."<br>";
        foreach($dta as $nval){
            echo $nval. "<br>";
        }
        echo "<br>";
    }