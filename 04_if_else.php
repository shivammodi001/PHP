<?php 

    $name = "shivam";
    if($name==="shivam"){
        echo "Hello Shivam you log in successfuly";
    }else{
        echo "Hello Shivam you log in failed";
    }

    echo "\n";
    //for example of if else
    $day = (int)readline("enter day: ");
    if($day==1){
        echo "monday";
    }elseif($day==2){
        echo "tuesday";
        }
        elseif($day==3){
            echo "wednesday";
            }
            elseif($day==4){
                echo "thursday";
                }
                elseif($day==5){
                    echo "friday";
                    }
                    elseif($day==6){
                        echo "saturday";
                        }
                        elseif($day==7){
                            echo "sunday";
                            }else{
                                echo "invalid day";
                            }

?>