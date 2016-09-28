<?php
$num=1;
for($lineno =1; $lineno <=20; $lineno++){
    echo 'Line no '.$lineno.':';

    for($j=1; $j<= $lineno; $j++ ){
            echo $num." ";
           $num++;
    }
    echo '<br>';
}