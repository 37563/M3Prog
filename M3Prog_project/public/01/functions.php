<?php

function Strlen(){
    // strlen() geeft de lengte van een string terug
    $naam = "Duurzaam Huis"; 
    $lengte = strlen($naam);
    echo "De lengte  " . $naam . " is: " . $lengte;
}

Strlen();

function StrToUpper(){
 //strtoupper() brengt naar upper case
 $str = "Mary Had A Little Lamb and She LOVED It So";
 $str = strtoupper($str);
    echo $str;   
}

StrToUpper();

function FileExist(){
    //checks to see if the file exists or not
$filename = '/path/to/foo.txt';

if (file_exists($filename)) {
    echo "The file $filename exists";
} else {
    echo "The file $filename does not exist";
}
}
?>