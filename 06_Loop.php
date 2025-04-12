<?php 

// For loop

for ($i=0; $i <5 ; $i++) { 
    # code...
    echo $i."\n";
}

// while loop
$i = 0;
while($i<11){
    # code...
    echo $i."\n";
    $i++;
    if($i==2){
        echo "conitions is match at $i apply break\n";
        // break;
    }
    if($i==5){
        echo "condition is not match at $i apply continue\n";
        continue;
    }
}


// Nested loop
for ($i=0; $i < 5; $i++){
    for ($j=0; $j <=$i; $j++){
        // echo $i." ".$j."\n";
        echo "*";
    }
    echo "\n";
}


//for each loop
$arr = array(1, 2, 3, 4, 5);
foreach ($arr as $value) {
    echo $value."\n";
}


// foreach loop with key and value
$arr = array("a" => 1, "b" => 2, "c" => 3);
foreach($arr as $key=>$value){
    echo $key." ".$value."\n";
}

?>