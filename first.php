<html>
    <head>
        <title>
            PHP
        </title>
    </head>
    <body>
        <?php
        define("test",50);// define the global variable
        echo test;
        $a = "sanket";
        echo "<b>".$a."</b><br>";
        /*var_dump($a);*/
        $weekday = 7;
        switch($weekday){
            case 1:
                echo "today is Monday";
            break;
            case 2:
                echo "today is Tuesday";
            break;
            case 3:
                echo "today is Wednesday";
            break;
            case 4:
                echo "today is Thursday";
            break;
            case 5:
                echo "today is Friday";
            break;
            case 6:
                echo "today is Saturday";
            break;
            case 7:
                echo "today is Sunday";
            break;
            default:
                echo "Enter the  valid weekday";
            break;
        }


        //Ternary Operators

        $result = "value is :==>  ". ((11 > 12) ? "this is true" : "this is false");
        echo "<br>".$result;

        //String operators (.), (.=)

        //(.)
        $a1 = 'hello '."world ";
        echo "<br>".$a1;

        //(.=)
        $a1 .= "this is ";
        echo "<br>".$a1;
        $a1 .= "Sanket kumar Verma<br>";
        echo "<br>".$a1;

        //while loop
        $a2 = 1;
        echo "<ul>";
         while($a2 <= 10){
            echo "<li>".$a2."." ." Sanket </li>";
            $a2++;
         }
         echo "</ul>";


         // do while loop

         $a3 = 1;
         do{
            echo "Kumar<br>";
            $a3++;
         }while($a3 <= 10);
         echo "<br>";
         echo "<br>";
         echo "<br>";



        // for loop


        for($a4 = 1; $a4 <= 10; $a4++){
            echo "<b>Verma<br></b>";
        }
        echo "<br>";
        echo "<br>";
        echo "<br>";


        //goto

       /* abc:
echo "<b>This is because of goto<br></b>";

for ($a5 = 1; $a5 <= 10; $a5++) {
    if ($a5 == 3) {
        goto abc;  // Jumps to "abc:" but does not restart the loop
    }
    echo "<b>Rohan<br></b>";
}
*/



        //function


        function abc(){
            return  "<h1>hello this is a  function</h1>";
        }

        $a6 = abc();
        echo $a6;
        echo $a6;
        echo $a6;


        //function with parmeter

        function abcd($a, $b){
            echo "the sum is ".($a+$b);
        }
        abcd(2,3);
        echo "<br>";
        echo "<br>";
        echo "<br>";
        abcd(23,45);
        echo "<br>";echo "<br>";
        echo "<br>";

        // pass by value

        function abcde($a){
            $a = "hey";
        }


        $str = "hello";
        abcde($str);
        echo $str;
        echo "<br>";


        // pass by reference

        function abcdef(&$a){
            $a = "hey";
        }
        $str = "hello";
        abcdef($str);
        echo $str;
        echo "<br>";
        echo "<br>";echo "<br>";


        $sayHello = function($name){
            echo "hello ".$name;
        };

        $sayHello("Rohan");

        echo "<br>";echo "<br>";


        // Global and local value

        $a7 = 10;
        function test(){
            global $a7;// local valiable which can not present outside the scope.
            echo "this is defined inside the scope".$a7;
        }

        test();
        echo $a7;


        echo "<br>";echo "<br>";
        /// ARRAY in php.


        $colors = array('red','blue','green','yellow');

        echo $colors[0]."<br>";
        echo "<br>";

        echo "<pre>";
        print_r($colors);
        echo "</pre>";
        ?>
    </body>
</html>