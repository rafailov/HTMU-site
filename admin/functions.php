<?php
function stringWrapper($string, $length){
    if(strlen($string) > $length){
        $content="";
        $helpString = $string;
        for($i = 0; $i < $length; $i++){
            $content.=$helpString[$i];
        }
        return $content . "...";
    }else{
        return $string;
    }
}