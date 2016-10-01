<?php
$i = 1;


for( ;$i<=5; $i++){
    echo 'I am Outside for loop <br>';
    for($j = 1;$j<=3; $j++){
        echo "&nbsp;&nbsp;&nbsp;&nbsp; I am inside for loop <br>";
    }

}



echo '<br>';

$space=1;
for($i=1;$i<=10;$i++){
    for($j=1;$j<=$i; $j++){
        echo '*';
        $space++;
    }
    echo '<br>';
}

echo '<br>';

$space=1;
for($i=1;$i<=10;$i++){

    for($k=10-$i;$k>=0;--$k){
       echo "&nbsp;";
   }
    for($j=1;$j<=$i; $j++){
        echo '*';
        $space++;
    }
    echo '<br>';
}

echo '<br>';


//making diamond
$space=1;

for($i=1;$i<=10;$i++){

    for($k=10-$i;$k>=0;--$k){
        echo "&nbsp;";
    }
    for($j=1;$j<=$i; $j++){

        echo '*&nbsp;';}
        $space++;
    echo '<br>';
}

echo '<br>';

for($m=10;$m==1;$m--){
    echo "hello";
}