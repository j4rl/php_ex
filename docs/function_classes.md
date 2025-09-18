# Functions and Classes in PHP code.
## Functions in PHP code.

```php

    function add($var1, $var2){ //function with two parameters
        return $var1 + $var2;
    }
    echo add(10, 20); //call function with two arguments

```
- Functions can have default parameter values.
    ```php
        function add($var1, $var2 = 0){ //function with two parameters, second parameter has default value of 0
            return $var1 + $var2;
        }
        echo add(10); //call function with one argument, second argument will be 0
        echo add(10, 20); //call function with two arguments
    ```
- Functions can have variable number of arguments using the `...` operator (splat operator).
    ```php
        function add(...$vars){ //function with variable number of arguments
            $sum = 0;
            foreach($vars as $var){
                $sum += $var;
            }
            return $sum;
        }
        echo add(10); //call function with one argument
        echo add(10, 20); //call function with two arguments
        echo add(10, 20, 30); //call function with three arguments
    ```
- Functions can return multiple values using an array or an object.
    ```php
        function addAndSubtract($var1, $var2){ //function with two parameters
            $sum = $var1 + $var2;
            $diff = $var1 - $var2;
            return array($sum, $diff); //return array with two values
        }
        list($sum, $diff) = addAndSubtract(10, 20); //call function and assign returned values to variables
        echo $sum; //print sum
        echo $diff; //print difference
    ```
    **Best practices for functions in PHP code:**
    - Use meaningful names for functions and parameters.
    - Use type hints for parameters and return types (PHP 7+).
    - Keep functions short and focused on a single task.
    - Use docblocks to document functions and their parameters/return values.
    - Avoid using global variables inside functions.
    - Make function solve a specific problem and avoid side effects.

    ## Here is an example of how to use Object-Oriented Programming (OOP) in PHP code.

```php

    class MyClass{ 
        //constructor (called when object is created)
        public function __construct(){
            echo "Object created";
        }
        public $var1 = "Hello";  //public property
        public $var2 = "World"; //public property
        public function myFunction(){ //public method
            return $this->var1 . " " . $this->var2;
        }
        //private property
        private $var3 = "Hello";
        //private method
        private function myFunction2(){
            return $this->var3;
        }
        //destructor (called when object is destroyed)
        public function __destruct(){
            echo "Object destroyed";
        }
    }
    $obj = new MyClass(); //create object
    echo $obj->myFunction(); //call method
    //echo $obj->myFunction2(); //error: private method
    //echo $obj->var3; //error: private property
    //set property
    $obj->var1 = "Hi";

```
- OOP is a programming paradigm that uses objects to represent data and behavior.
- Classes are blueprints for creating objects.
- Objects are instances of classes.
- Properties are variables that belong to a class or object.
- Methods are functions that belong to a class or object.
- Access modifiers (`public`, `private`, `protected`) control the visibility of properties and methods.
- The constructor method (`__construct`) is called when an object is created.
- The destructor method (`__destruct`) is called when an object is destroyed.
- Inheritance allows a class to inherit properties and methods from another class using the `extends` keyword.
- Polymorphism allows methods to have the same name but behave differently based on the object that calls them (method overriding).

## Here is how to use exceptions in PHP code.
Exceptions are used to handle errors and other exceptional events in PHP code.
Same as Java and JavaScript, PHP has a try-catch block for exception handling.

```php

    try{
        throw new Exception("An error occurred"); //throw exception
    }catch(Exception $e){ //catch exception
        echo $e->getMessage();
    }

```
- The try block contains code that may throw an exception.
- The catch block contains code that handles the exception.
- The throw statement is used to throw an exception.
- The Exception class is the base class for all exceptions in PHP.
- Custom exception classes can be created by extending the Exception class.
- Multiple catch blocks can be used to handle different types of exceptions.
- The finally block can be used to execute code that should run regardless of whether an exception was thrown or not.
- There are no promises or async/await in PHP like in JavaScript, but you can use libraries like Guzzle or ReactPHP for asynchronous programming.