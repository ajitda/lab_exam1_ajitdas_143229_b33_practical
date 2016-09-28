<?php
if(!empty($_POST['name'])){
    echo "students name : " .$_POST['name'];
}else{
    echo 'You didn’t enter your name';
}
echo "<br>";
if(!empty($_POST['roll'])){
    echo "students roll : " .$_POST['roll'];
}else{
    echo 'You didn’t enter your Roll';
}

echo "<br>";
if(!empty($_POST['phone'])){
    echo "students phone : " .$_POST['phone'];
}else{
    echo 'You didn’t enter your Phone';
}

