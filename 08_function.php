<?php 
        // function : it is block of code which can be called multiple times from different parts of the program


        function sub(){
            $a = (int)readline("enter a: ");
            $b = (int)readline("enter b: ");
            $c = $a - $b;
            echo "subtraction of $a and $b is $c";
        }
        sub(); // calling the function sub() to execute the code inside it

        function add(...$a){
            $sum = 0;
            foreach($a as $value){
                $sum+=$value;
            }
            return $sum;
        }
        // function call
        echo add(1,2,3,4,5); // output : 15
        echo "\n";
        echo add(10,50,1.55);


        echo "\n";
        //Nested Function
        function outer(){
            $x = 10;
            function inner(){
                global $x;
                $x += 10;
                echo "value of x is $x";

            }
            inner();
        }
        outer();
        
?>