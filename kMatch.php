<?php
function kMatch($w,$n){
    
    $win=$w ;
    $num=$n ;
    $match=0 ;
    if(strlen($win)!=8 || strlen($num)!=8){
        echo "字數不對! 請檢查,需符合8位數。";
        }
    else{
        for ($i=1; $i<=8; $i++) { 
            
            if (substr($win,-$i,1)==substr($num,-$i,1)) {
                $match++ ;
            }else{$i=9;}

        }
    }return $match;
}


?>