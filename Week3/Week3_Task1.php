<?php

function revStr($str) {
    $rev = "";
    $temp = "";
    for($i = 0; $i < strlen($str); $i++) {
        if($str[$i] == " ") {
            $rev .= " ". $temp . "";
            $temp = "";
        }
        $temp = $str[$i] . $temp;    
    }
    return $rev .= $temp;
}

$str = "emocleW ot PHP";

echo "Result: ".$str." ->".revStr($str);

?>