<?php


$alphabet=range('a','z');
$name='jelena';
$spl_name=str_split($name);
$reverse_name=strrev($name);
$spl_rev=str_split($reverse_name);


for($i=0;$i<count($spl_name);$i++){
    for ($j=0;$j<count($alphabet);$j++){
        if($alphabet[$j]===$spl_name[$i]){
            echo '<b>'.$alphabet[$j].'</b>';
        }elseif($alphabet[$j]===$reverse_name[$i]){
            echo '<u>'.$alphabet[$j].'</u>';
        }
        else{
         echo $alphabet[$j];
    }


}echo '<br>';
}

