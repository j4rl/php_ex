# Code examples
## Examples of how to use variables in PHP code.

```php	

    $var1 = "Hello";
    $var2 = "World";
    echo $var1 . " " . $var2;

```
- **String concatenation** is done using the dot (.) operator.
- **Variable interpolation** can be done using double quotes.
- **Comments** can be single line (// or #) or multi-line (/* */).

## How to use arithmetic operators in PHP code.

```php

    $var1 = 10;
    $var2 = 20;
    echo $var1 + $var2;
    echo $var1 - $var2;
    echo $var1 * $var2;
    echo $var1 / $var2;
    echo $var1 % $var2; //modulo operator (remainder of division)

```
- **Increment** operator (++) and **decrement** operator (--) can be used to increase or decrease a variable by 1.
- **Compound assignment** operators (+=, -=, *=, /=, %=) can be used to perform an operation and assign the result to the same variable.

## Comparison operators in PHP code.

```php

    $var1 = 10;
    $var2 = 20;
    echo $var1 == $var2; //equal
    echo $var1 != $var2; //not equal
    echo $var1 > $var2; //greater than
    echo $var1 < $var2; //less than
    echo $var1 >= $var2; //greater than or equal
    echo $var1 <= $var2; //less than or equal

```
- **Identical** operator (===) checks if two variables are equal and of the same type.
- **Not identical** operator (!==) checks if two variables are not equal or not of the same type.
- **Spaceship** operator (<=>) returns -1, 0, or 1 when $var1 is respectively less than, equal to, or greater than $var2.
- **Null coalescing** operator (??) returns its first operand if it exists and is not null; otherwise, it returns its second operand.
- **Ternary** operator (condition ? expr1 : expr2) is a shorthand for if-else statement.
- **Elvis** operator (?:) is a shorthand for ternary operator when the middle expression is the same as the first.


## How to use logical operators in PHP code.

```php

    $var1 = 10;
    $var2 = 20;
    echo $var1 == 10 && $var2 == 20; //and
    echo $var1 == 10 || $var2 == 20; //or
    echo !($var1 == 10 && $var2 == 20); //not (negation) 

```
- **and** operator has lower precedence than && operator. 
- **or** operator has lower precedence than || operator.
- **xor** operator returns true if either $var1 or $var2 is true, but not both.
- **!** operator has higher precedence than && and || operators.
- Parentheses can be used to group expressions and change the precedence.
(Precedence means which operator is evaluated first in an expression with multiple operators)

## Examples of how to use if statements in PHP code.

```php

    $var1 = 10;
    $var2 = 20;
    if($var1 == 10){ //if statement (true) 
        echo "var1 is 10";
    }
    if($var2 == 20){
        echo "var2 is 20";
    }
    //if else statement
    if($var1 == 20){
        echo "var1 is 20";
    }else{
        echo "var1 is not 20";
    }
    //if else if statement
    if($var1 == 20){
        echo "var1 is 20";
    }else if($var1 == 10){
        echo "var1 is 10";
    }else{
        echo "var1 is not 10 or 20";
    }

```
- if statements can be nested (if inside if).
- else if can be written as elseif (one word).
- Curly braces ({}) can be omitted if there is only one statement in the block, but it is recommended to always use them for better readability and to avoid errors.
- Ternary operator can be used as a shorthand for if-else statement.
    - Example: $result = ($var1 == 10) ? "var1 is 10" : "var1 is not 10";
    - Above is equivalent to:
    ```php
        if($var1 == 10){
            $result = "var1 is 10";
        }else{
            $result = "var1 is not 10";
        }
    ```
- Null coalescing operator can be used to check if a variable is set and not null.
    - Example: $value = $var1 ?? "default value";
    - Above is equivalent to:
    ```php
        if(isset($var1)){
            $value = $var1;
        }else{
            $value = "default value";
        }
    ```

## Switch statements in PHP code.

```php

    $var1 = 10;
    switch($var1){
        case 10:
            echo "var1 is 10";
            break;
        case 20:
            echo "var1 is 20";
            break;
        default:
            echo "var1 is not 10 or 20";
    }

```
- Break statement is used to exit the switch statement. If break is omitted, the next case will be executed (fall through).
- Multiple cases can be grouped together to execute the same block of code.
    ```php
        switch($var1){
            case 10:
            case 20:
                echo "var1 is 10 or 20";
                break;
            default:
                echo "var1 is not 10 or 20";
        }
    ```
- Default case is optional. If no case matches and there is no default case, nothing will be executed.

## Match statements in PHP code.

```php

    $var1 = 10;
    match($var1){
        10 => echo "var1 is 10",
        20 => echo "var1 is 20",
        default => echo "var1 is not 10 or 20"
    }

```
- Match expression returns a value, so it can be assigned to a variable.
    ```php
        $result = match($var1){
            10 => "var1 is 10",
            20 => "var1 is 20",
            default => "var1 is not 10 or 20"
        };
    ```
- Break statement is not needed, as each case is an expression that returns a value.
- Multiple cases can be grouped together to return the same value.
    ```php
        $result = match($var1){
            10, 20 => "var1 is 10 or 20",
            default => "var1 is not 10 or 20"
        };
    ```


## While loops in PHP code.

```php

    $var1 = 0;
    while($var1 < 10){ //while loop until var1 is less than 10
        echo $var1;
        $var1++;
    }
    //and here is a do while loop
    $var1 = 0;
    do{
        echo $var1;
        $var1++;
    }while($var1 < 10); //do while loop until var1 is less than 10 (at least one iteration)

```
- Break statement can be used to exit the loop.
- Continue statement can be used to skip the current iteration and move to the next iteration.
- Infinite loops can be created by using while(true) or for(;;), but they should be avoided unless necessary.
- Be careful with infinite loops, as they can crash the server or browser if not handled properly.
- Always make sure there is a way to exit the loop, either by using break or by having a condition that will eventually be false.

## Examples of how to use for loops in PHP code.

```php

    for($i = 0; $i < 10; $i++){ //for loop: set i to 0, loop until i is less than 10, increment i by 1
        echo $i;
    }

```
- Break statement can be used to exit the loop.
- Continue statement can be used to skip the current iteration and move to the next iteration.
- Multiple variables can be used in the for loop initialization and increment/decrement sections.
    ```php
        for($i = 0, $j = 10; $i < 10; $i++, $j--){
            echo $i . " " . $j;
        }
    ```
- The initialization section is executed only once at the beginning of the loop.
- The increment/decrement section is executed at the end of each iteration of the loop.

## Foreach loops in PHP code.

```php

    $arr = array(1, 2, 3, 4, 5); //array with 5 elements (list in Python)
    foreach($arr as $value){ //foreach loop: for each value in array
        echo $value;
    }

```
- Key-value pairs can be used in the foreach loop to access both the key and the value of each element in an associative array.
    ```php
        $arr = array("key1" => 1, "key2" => 2, "key3" => 3); //associative array with 3 key-value pairs (dictionary in Python)
        foreach($arr as $key => $value){ //foreach loop: for each key-value pair in array
            echo $key . " " . $value;
        }
    ```
- Break statement can be used to exit the loop.
- Continue statement can be used to skip the current iteration and move to the next iteration.
- Foreach loop can be used with objects to iterate over their properties.
    ```php
        class MyClass{
            public $var1 = 1;
            public $var2 = 2;
            public $var3 = 3;
        }
        $obj = new MyClass();
        foreach($obj as $key => $value){
            echo $key . " " . $value;
        }
    ```


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
- Functions can have variable number of arguments using the ... operator (splat operator).
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

## Arrays in PHP code. (indexed arrays, associative arrays, multidimensional arrays)

```php

    $arr = array(1, 2, 3, 4, 5); //array with 5 elements (list in Python)
    echo $arr[0]; //access first element, arrays allways start at 0 in PHP (not like in matlab)
    echo $arr[1];
    echo $arr[2];
    echo $arr[3];
    echo $arr[4];

```
- Arrays in PHP are zero-indexed, meaning the first element is at index 0.
- Arrays can be created using the array() function or the shorthand [] syntax (PHP 5.4+).
    ```php
        $arr1 = array(1, 2, 3); //using array() function
        $arr2 = [1, 2, 3]; //using shorthand [] syntax
    ```
- Arrays can be modified by adding, removing, or changing elements.
    ```php
        $arr = array(1, 2, 3);
        $arr[] = 4; //add element to end of array
        array_push($arr, 5); //add element to end of array
        array_pop($arr); //remove last element from array
        array_shift($arr); //remove first element from array
        array_unshift($arr, 0); //add element to beginning of array
        $arr[1] = 10; //change second element of array
    ``` 
- Arrays can be sorted using built-in functions like sort(), rsort(), asort(), arsort(), ksort(), krsort().
    ```php
        $arr = array(3, 1, 4, 2);
        sort($arr); //sort array in ascending order
        rsort($arr); //sort array in descending order
    ```
- Arrays can be merged using array_merge() function.
    ```php
        $arr1 = array(1, 2, 3);
        $arr2 = array(4, 5, 6);
        $arr3 = array_merge($arr1, $arr2); //merge two arrays
    ```

## Associative arrays in PHP code. (dictionaries in Python)

```php

    $arr = array("key1" => 1, "key2" => 2, "key3" => 3); //associative array with 3 key-value pairs (dictionary in Python)
    echo $arr["key1"];
    echo $arr["key2"];
    echo $arr["key3"];

```
- Associative arrays use named keys that you assign to them.
- Keys can be strings or integers.
- Values can be of any type, including other arrays or objects.
- Associative arrays can be created using the array() function or the shorthand [] syntax (PHP 5.4+).
    ```php
        $arr1 = array("key1" => 1, "key2" => 2); //using array() function
        $arr2 = ["key1" => 1, "key2" => 2]; //using shorthand [] syntax
    ```
- Associative arrays can be modified by adding, removing, or changing key-value pairs.
    ```php
        $arr = array("key1" => 1, "key2" => 2);
        $arr["key3"] = 3; //add key-value pair
        unset($arr["key2"]); //remove key-value pair
        $arr["key1"] = 10; //change value of key
    ```

## Multidimensional arrays in PHP code. (matrices in Python)

```php

    $arr = array(array(1, 2, 3), array(4, 5, 6), array(7, 8, 9)); //multidimensional array with 3 arrays (each with 3 elements) (matrix in Python)
    echo $arr[0][0];
    echo $arr[0][1];
    echo $arr[0][2];
    echo $arr[1][0];
    echo $arr[1][1];
    echo $arr[1][2];
    echo $arr[2][0];
    echo $arr[2][1];
    echo $arr[2][2];

```
- Multidimensional arrays can have any number of dimensions.
- Elements can be accessed using multiple indices.
**Best practices for multidimensional arrays in PHP code:**
- Use meaningful names for keys and indices.
- Keep arrays as flat as possible to avoid complexity.
- Use built-in functions like array_map(), array_filter(), array_reduce() to manipulate arrays.
- Use foreach loops to iterate over arrays.

## Superglobals in PHP code.

```php

    echo $_SERVER['PHP_SELF'];
    echo $_SERVER['SERVER_NAME'];
    echo $_SERVER['HTTP_HOST'];
    echo $_SERVER['HTTP_USER_AGENT'];
    echo $_SERVER['SCRIPT_NAME'];
    //some other superglobals are: $_GET, $_POST, $_FILES, $_COOKIE, $_SESSION
```
- Superglobals are built-in variables that are always accessible, regardless of scope.
- Superglobals are prefixed with an underscore and are all uppercase.
- Superglobals are arrays that contain information about the server, request, and environment.
- Superglobals can be used to access form data, cookies, sessions, and other information.

## How to use cookies in PHP code.

```php

    setcookie("name", "value", time() + 3600, "/"); //set cookie with name, value, expiration time, path
    echo $_COOKIE["name"];  //get cookie value

```
- Cookies are small text files that are stored on the client's computer.
- Cookies can be set using the setcookie() function.
- Cookies can be accessed using the $_COOKIE superglobal array.
- Cookies can have an expiration time, after which they will be deleted.

## How to use sessions in PHP code.

```php

    session_start(); //start session (session must be started before any output)
    $_SESSION["name"] = "value"; //set session variable
    echo $_SESSION["name"]; //get session variable

```
- Sessions are used to store information about the user across multiple pages.
- Sessions are started using the session_start() function. (must be called before any output)
- Session variables are stored in the $_SESSION superglobal array.
- Sessions can be destroyed using the session_destroy() function.

## File handling in PHP code.

```php

    $file = fopen("file.txt", "w"); //open file for writing (create if not exists)
    fwrite($file, "Hello World"); //write to file
    fclose($file); //close file
    $file = fopen("file.txt", "r"); //open file for reading
    echo fread($file, filesize("file.txt")); //read from file
    fclose($file); //close file

```
- Files can be opened using the fopen() function with different modes (r, w, a, r+, w+, a+).
- Files can be read using the fread() function and written using the fwrite() function.
- Files should be closed using the fclose() function to free up resources.
- Other useful file functions include file_get_contents(), file_put_contents(), file_exists(), unlink(), rename(), copy(), is_readable(), is_writable().
- Always check if the file exists before trying to read or write to it.

## How to use JSON in PHP code.

```php

    $arr = array("key1" => 1, "key2" => 2, "key3" => 3); //associative array with 3 key-value pairs
    echo json_encode($arr); //convert array to JSON string
    $json = '{"key1":1,"key2":2,"key3":3}'; //JSON string
    $arr = json_decode($json, true); //convert JSON string to array
    echo $arr["key1"];
    echo $arr["key2"];
    echo $arr["key3"];
```
- JSON (JavaScript Object Notation) is a lightweight data interchange format.
- JSON can be encoded using the json_encode() function and decoded using the json_decode() function
- json_decode() function can return an associative array if the second parameter is set to true, otherwise it returns an object.
- JSON is commonly used for data exchange between a server and a web application.
- Always validate and sanitize JSON data before using it.

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
- Access modifiers (public, private, protected) control the visibility of properties and methods.
- The constructor method (__construct) is called when an object is created.
- The destructor method (__destruct) is called when an object is destroyed.
- Inheritance allows a class to inherit properties and methods from another class using the extends keyword.
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

## Examples of preventing SQL injection in PHP code
Some examples of how to prevent SQL injection in PHP code with builtin functions in PHP

```php
    $var1 = stripslashes($_POST['someInput']); //remove backslashes
    $var2 = htmlspecialchars($_POST['someInput']); //convert special characters to HTML entities
    $var3 = mysqli_real_escape_string($conn, $_POST['someInput']); //escape special characters
    $var4 = filter_var($_POST['someInput'], FILTER_SANITIZE_STRING); //sanitize string
    $var5 = filter_var($_POST['someInput'], FILTER_SANITIZE_NUMBER_INT); //sanitize integer
    $var6 = trim($_POST['someInput']);  //remove spaces in the beginning and end of string
```
- Use prepared statements and parameterized queries to prevent SQL injection.
- Use stored procedures to encapsulate SQL code and prevent SQL injection.
- Use ORM (Object-Relational Mapping) libraries like Eloquent or Doctrine to abstract database interactions and prevent SQL injection.
- Always validate and sanitize user input before using it in SQL queries.


**Sanitizing user input**

```php
    function sanitize($input){
        $input = stripslashes($input); //remove backslashes
        $input = htmlspecialchars($input); //convert special characters to HTML entities
        $input = filter_var($input, FILTER_SANITIZE_STRING); //sanitize string
        return $input;
    }

    $var1 = sanitize($_POST['someInput']);  //this is how you utilize the function
```
- Always validate and sanitize user input before using it in SQL queries or displaying it on a web page.
- Use built-in functions like htmlspecialchars(), filter_var(), and mysqli_real_escape_string() to sanitize user input.
- Use regular expressions to validate user input.
- Never trust user input, always assume it is malicious. (Never trust a Klingon)
- Use HTTPS to encrypt data transmitted between the client and server.
- Keep your PHP version and libraries up to date to ensure you have the latest security patches.
- Use a web application firewall (WAF) to protect against SQL injection and other attacks.

## Tools for testing and debugging PHP code
- Xdebug: A powerful debugging and profiling tool for PHP.
- PHPUnit: A unit testing framework for PHP.
- PHPStan: A static analysis tool for PHP that helps find bugs and improve code quality.
- Psalm: Another static analysis tool for PHP that helps find bugs and improve code quality.

## Best practices for writing PHP code
- Follow the PSR (PHP Standards Recommendations) coding standards.
- Use meaningful variable and function names.
- Write modular and reusable code.
- Use comments and documentation to explain complex code.
- Keep your code DRY (Don't Repeat Yourself) by reusing code and avoiding duplication.
- Use version control (e.g., Git) to track changes and collaborate with others.
- Write tests for your code to ensure it works as expected.
- Use a linter (e.g., PHP_CodeSniffer) to enforce coding standards and catch potential issues.
    - Link: [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer)
- Use a dependency manager (e.g., Composer) to manage libraries and packages.
    - Link: [Composer](https://getcomposer.org/)

## Automated testing tools for PHP code
- PHPUnit: A unit testing framework for PHP.
    - Link: [PHPUnit](https://phpunit.de/)
- Behat: A behavior-driven development (BDD) framework for PHP.
    - Link: [Behat](https://behat.org/)
- Codeception: A full-stack testing framework for PHP.
    - Link: [Codeception](https://codeception.com/)
- PHPSpec: A BDD framework for PHP that focuses on specifying the behavior of classes.
    - Link: [PHPSpec](http://www.phpspec.net/)
- Selenium: A browser automation tool that can be used for end-to-end testing of web applications.
    - Link: [Selenium](https://www.selenium.dev/)
- Mockery: A mocking framework for PHP that can be used to create mock objects for testing.
    - Link: [Mockery](https://github.com/mockery/mockery)
**Many of these tools cost money, here are some open source alternatives:**
- Pest: A testing framework with a focus on simplicity and elegance.
    - Link: [Pest](https://pestphp.com/)
- Atoum: A simple, modern, and intuitive unit testing framework for PHP.
    - Link: [Atoum](https://atoum.org/)
- SimpleTest: A unit testing and web testing framework for PHP.
    - Link: [SimpleTest](http://simpletest.org/)    
- PHPT: A testing framework that is included with PHP and can be used to test PHP extensions and core functionality.
    - Link: [PHPT](https://www.php.net/manual/en/internals2.php-internals.testing.phpunit.php)
- Infection: A mutation testing framework for PHP that helps improve test coverage and quality.
    - Link: [Infection](https://infection.github.io/)
- PHP Mess Detector: A tool that scans PHP code for potential issues and code smells.
    - Link: [PHP Mess Detector](https://phpmd.org/)
