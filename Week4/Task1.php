<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        //Advantages and Disadvantages of Multiple Inheritance:

        //   Advantages of multiple inheritence:
        //   - A class can be divided into many subclasses
        //   - Subclasses can inherit atribute and methods from multiple superclasses
        //   - Code is shorter and more organized
        //   - Allows the ability to override superclass
        //   - Code are more flexible
    
        //   Disadvantages of multiple inheritence
        //   - Use of multiple inheritance makes code more complexed/complicated
        //   - Some languages dont support multiple inheritance, i.e PHP can only use trait and interface to allow multiple inheritance
        //   - Code will be harder to maintain if there are many superclasses
        //   - Any changes to superclass or parent class, subclass has to change too
        //   - Class methods needs to be different, if class methods have the same name, there will be a collusion error

        // Option 1: Trait

        trait Hello 
        {
            public function sayHello() 
            {
                echo "Hello" . "\n";
            }
        }

        trait Goodbye 
        {
            public function sayGoodbye() 
            {
                echo "Goodbye" . "\n";
            }
        }

        class Test1 
        {
            use Hello;
            use Goodbye;
            public function greetings() 
            {
                echo "Hello and Goodbye" . "\n";
            }
        }
        echo "Trait Example:" . "\n";  
        $test = new Test1();
        $test -> sayHello();
        $test -> sayGoodbye();
        $test -> greetings();
        
        // Option 2: Interface

        interface School 
        {
            public function insideSchool();
         }
           
         interface Room 
         {
            public function insideRoom();
         }
           
         class Test2 implements Room, School 
         {
           
             function insideRoom() 
             {
                 echo "I am inside a room" . "\n";
             }
           
             function insideSchool() 
             {
                 echo "I am inside a School" . "\n";
             }
           
             public function insideBoth()
             {
                 echo "I am inside a room inside a school" . "\n";
             }
         }
         echo "Interface Example:" . "\n";  
         $student = new Test2();
         $student-> insideSchool();
         $student-> insideRoom();
         $student-> insideBoth();

        // Collusion error example

        trait A 
        {
            public function printLetter()
            {
                echo "A";
            }  
        }
        trait B 
        {
            public function printLetter()
            {
                echo "B";
            }
        }
        class Test3 
        {
            use A;
            use B;
        } 
         $error = new Test3();
         $error-> printLetter();
        ?>
</body>
</html>