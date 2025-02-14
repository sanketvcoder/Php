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

        //Associative Array

        $age = array(
            "bill"=>10,
            "joe"=> 21,
            "peterson"=>31
        );

        echo "<pre>";
            print_r($age);
        echo "</pre>";

        echo "<br>";echo "<br>";
        //foreEach 


        $array = array(10,20,30);

        foreach($array as $value){
            echo $value."<br>";
        }
        echo "<br>";echo "<br>";
        foreach($age as $key => $value){
            echo $key." = ".$value."<br>";
        }

        echo "<br>";echo "<br>";

        // multi Dimension array

        $data = [
                ["krishna", "verma",50000],
                ["Mohan","Rajput",40000],
                ["Radhika","jatav",80000]
            ];
            echo "<table border='1' cellspacing='0' cellpadding='5'>";
                echo "<th>Emp_Name</th>";
                echo "<th>last_Name</th>";
                echo "<th>Emp_Salary</th>";
            foreach($data as $v1){
                echo "<tr>";
                foreach($v1 as $v2){
                    echo "<td>".$v2."</td>";
                }
                echo "</tr>";
            }
            echo "</table>";

            echo "<br>";echo "<br>";

            $data2 = [
                "krishna" => array("physics" => 89, "chemistry" => 83, "Math" => 90),
                "Mohan"   => array("physics" => 69, "chemistry" => 82, "Math" => 70),
                "Sonia"   => array("physics" => 90, "chemistry" => 45, "Math" => 80)
            ];


            



                // 2nd 
            echo "<table border='1' cellspacing='0' cellpadding='5'>";
                // Table Header
                echo "<tr>";
                    echo "<th>Name</th>";
                    echo "<th>Physics</th>";
                    echo "<th>Chemistry</th>";
                    echo "<th>Math</th>";
                echo "</tr>";

                // Table Data
                foreach ($data2 as $name => $marks) {
                    echo "<tr>";
                        echo "<td>" . ucfirst($name) . "</td>";  // Capitalize first letter if needed
                        echo "<td>" . $marks['physics'] . "</td>";
                        echo "<td>" . $marks['chemistry'] . "</td>";
                        echo "<td>" . $marks['Math'] . "</td>";
                    echo "</tr>";
                }
            echo "</table>";

            echo "<br>";echo "<br>";
            echo "<br>";echo "<br>";
            //List Function


            $emp=[
                [1,"krishna", "Manager",50000],
                [2,"Mohan","Salesman",null],
                [3,"Radhika","Computer Operator",80000],
                [4,"Amir","Driver",4000]
            ];
            echo "<table border='1' cellspacing='0' cellpadding='5'>";
                echo "<tr>";
                    echo "<th>Id</th>";
                    echo "<th>Name</th>";
                    echo "<th>Designation</th>";
                    echo "<th>Salary</th>";
                echo "</tr>";
            foreach($emp as list($id,$name,$designation,$salary)){
                echo "<tr><td>$id</td> <td>$name</td> <td>$designation</td> <td>$salary</td> </tr>";
            }
            echo "</table>";

            echo "<br>";echo "<br>";
            echo "<br>";echo "<br>";

            //2nd associative array

            $emp2 =  [
                            [
                                "id"       => 1,
                                "name"     => "krishna",
                                "position" => "Manager",
                                "salary"   => 50000
                            ],
                            [
                                "id"       => 2,
                                "name"     => "Mohan",
                                "position" => "Salesman",
                                "salary"   => null
                            ],
                            [
                                "id"       => 3,
                                "name"     => "Radhika",
                                "position" => "Computer Operator",
                                "salary"   => 80000
                            ],
                            [
                                "id"       => 4,
                                "name"     => "Amir",
                                "position" => "Driver",
                                "salary"   => 4000
                            ]
                    ];

                    echo "<table border='1' cellspacing='0' cellpadding='5'>";
                echo "<tr>";
                    echo "<th>Id</th>";
                    echo "<th>Name</th>";
                    echo "<th>Designation</th>";
                    echo "<th>Salary</th>";
                echo "</tr>";
            foreach($emp2 as list("id"=>$id,"name"=>$name,"position"=>$designation,"salary"=>$salary)){
                echo "<tr><td>$id</td> <td>$name</td> <td>$designation</td> <td>$salary</td> </tr>";
            }
            echo "</table>";







            //Array functions 



            //Count() & Sizeof() functions of array


            echo "<br>";echo "<br>";
            echo "<br>";echo "<br>";

            $a9 = [1,"krishna", "Manager","50000"];

            echo count($a9);

            echo "<br>";echo "<br>";
            echo "<br>";echo "<br>";

            // in_array() used to return 1/0 based on element present in it or not 
            if(in_array(50000,$a9,true)){
                echo "Find Successfully";
            }else{
                echo "can't find";
            }

            echo "<br>";echo "<br>";
            echo "<br>";echo "<br>";

            // array_search() used to return the index/key if the element is present the array

            echo array_search(50000,$a9);

            echo "<br>";echo "<br>";
            echo "<br>";echo "<br>";

            // array_replace() crretae a new array and changes it 

            

            ?>
    </body>
</html>