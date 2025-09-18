# Functions and Classes in PHP code.
## Functions in PHP code.
### traditional function declaration and usage.
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
    ### Anonymous functions (closures) in PHP.
```php
    $add = function($var1, $var2){
        return $var1 + $var2;
    };
    echo $add(10, 20);
```
- Anonymous functions can be assigned to variables and passed as arguments to other functions.
- Anonymous functions can use variables from the parent scope using the `use` keyword.
    ```php
        $multiplier = 2;
        $multiply = function($var) use ($multiplier){
            return $var * $multiplier;
        };
        echo $multiply(10); //print 20
    ```
- Anonymous functions can be used as callbacks for array functions like `array_map`, `array_filter`, etc.
    ```php
        $numbers = [1, 2, 3, 4, 5];
        $squared = array_map(function($var){
            return $var * $var;
        }, $numbers);
        print_r($squared); //print [1, 4, 9, 16, 25]
    ```
### Arrow functions (PHP 7.4+)
```php
    $add = fn($var1, $var2) => $var1 + $var2;
    echo $add(10, 20);
```
- Arrow functions have a shorter syntax and automatically capture variables from the parent scope.
- Arrow functions can only contain a single expression and implicitly return its value.
- Arrow functions are always anonymous and cannot have a name.
- Arrow functions cannot use the `use` keyword to capture variables from the parent scope.

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

## Advanced OOP concepts in PHP.
- Interfaces define a contract for classes to implement using the `interface` keyword.
```php
    interface MyInterface{
        public function myMethod();
    }
    class MyClass implements MyInterface{
        public function myMethod(){
            return "Hello World";
        }
    }
    $obj = new MyClass();
    echo $obj->myMethod();
```
- Traits are reusable sets of methods that can be included in classes using the `use` keyword.
```php
    trait MyTrait{
        public function myMethod(){
            return "Hello World";
        }
    }
    class MyClass{
        use MyTrait;
    }
    $obj = new MyClass();
    echo $obj->myMethod();
```
- Abstract classes are classes that cannot be instantiated and can contain abstract methods that must be implemented by subclasses using the `abstract` keyword.
```php
    abstract class MyAbstractClass{
        abstract public function myMethod();
    }
    class MyClass extends MyAbstractClass{
        public function myMethod(){
            return "Hello World";
        }
    }
    $obj = new MyClass();
    echo
    $obj->myMethod();
``` 
- Namespaces are used to organize code and avoid name collisions using the `namespace` keyword.
```php
    namespace MyNamespace;
    class MyClass{
        public function myMethod(){
            return "Hello World";
        }
    }
    $obj = new \MyNamespace\MyClass();
    echo
    $obj->myMethod();
```
- Autoloading is a mechanism to automatically load classes when they are needed using the `spl_autoload_register` function or Composer's autoloader.
```php
    spl_autoload_register(function($class){
        include $class . '.php';
    });
    $obj = new MyClass();
    echo
    $obj->myMethod();
```
- Magic methods are special methods that start with `__` and are called automatically in certain situations (e.g., `__get`, `__set`, `__call`, `__toString`, etc.).
```php
    class MyClass{
        private $data = array();
        public function __get($name){
            return $this->data[$name];
        }
        public function __set($name, $value){
            $this->data[$name] = $value;
        }
        public function __call($name, $arguments){
            return "Called method '$name' with arguments: " . implode(', ', $arguments);
        }
        public function __toString(){
            return "MyClass object";
        }
    }
    $obj = new MyClass();
    $obj->var1 = "Hello";
    echo $obj->var1; //print "Hello"
    echo $obj->myMethod("arg1", "arg2"); //print "Called method 'myMethod' with arguments: arg1, arg2"
    echo $obj; //print "MyClass object"
``` 
## Best practices for OOP in PHP code:
    - Use meaningful names for classes, properties, and methods.
    - Use namespaces to organize code and avoid name collisions.
    - Use autoloading to automatically load classes when they are needed.
    - Keep classes focused on a single responsibility (Single Responsibility Principle).
    - Use interfaces and abstract classes to define contracts and enforce implementation.
    - Use traits to reuse code across multiple classes.
    - Use access modifiers to control the visibility of properties and methods.
    - Use docblocks to document classes, properties, and methods.
    - Avoid using global variables inside classes.
    - Make classes solve a specific problem and avoid side effects. 
    - Follow SOLID principles for better OOP design.
        - S - Single Responsibility Principle (Which states that a class should have only one reason to change)
        - O - Open/Closed Principle (Which states that classes should be open for extension but closed for modification)
        - L - Liskov Substitution Principle (Which states that subclasses should be substitutable for their base classes)
        - I - Interface Segregation Principle (Which states that clients should not be forced to depend on interfaces they do not use)
        - D - Dependency Inversion Principle (Which states that high-level modules should not depend on low-level modules, but both should depend on abstractions)
