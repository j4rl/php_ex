# Code examples
Here are some examples of how to use variables in PHP code.

```php	

    $var1 = "Hello";
    $var2 = "World";
    echo $var1 . " " . $var2;

```

Here is some examples of how to use arithmetic operators in PHP code.

```php

    $var1 = 10;
    $var2 = 20;
    echo $var1 + $var2;
    echo $var1 - $var2;
    echo $var1 * $var2;
    echo $var1 / $var2;
    echo $var1 % $var2; //modulo operator (remainder of division)

```

Here is some examples of how to use comparison operators in PHP code.

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

Here is some examples of how to use logical operators in PHP code.

```php

    $var1 = 10;
    $var2 = 20;
    echo $var1 == 10 && $var2 == 20; //and
    echo $var1 == 10 || $var2 == 20; //or
    echo !($var1 == 10 && $var2 == 20); //not (negation) 

```

Here is some examples of how to use if statements in PHP code.

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

Here is some examples of how to use switch statements in PHP code.

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

Here is an example of how to use match statements in PHP code.

```php

    $var1 = 10;
    match($var1){
        10 => echo "var1 is 10",
        20 => echo "var1 is 20",
        default => echo "var1 is not 10 or 20"
    }

```

Here is some examples of how to use while loops in PHP code.

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

Here is some examples of how to use for loops in PHP code.

```php

    for($i = 0; $i < 10; $i++){ //for loop: set i to 0, loop until i is less than 10, increment i by 1
        echo $i;
    }

```

Here is some examples of how to use foreach loops in PHP code.

```php

    $arr = array(1, 2, 3, 4, 5); //array with 5 elements (list in Python)
    foreach($arr as $value){ //foreach loop: for each value in array
        echo $value;
    }

```

Here is some examples of how to use functions in PHP code.

```php

    function add($var1, $var2){ //function with two parameters
        return $var1 + $var2;
    }
    echo add(10, 20); //call function with two arguments

```

Here is some examples of how to use arrays in PHP code.

```php

    $arr = array(1, 2, 3, 4, 5); //array with 5 elements (list in Python)
    echo $arr[0]; //access first element, arrays allways start at 0 in PHP (not like in matlab)
    echo $arr[1];
    echo $arr[2];
    echo $arr[3];
    echo $arr[4];

```

Here is some examples of how to use associative arrays in PHP code.

```php

    $arr = array("key1" => 1, "key2" => 2, "key3" => 3); //associative array with 3 key-value pairs (dictionary in Python)
    echo $arr["key1"];
    echo $arr["key2"];
    echo $arr["key3"];

```

Here is some examples of how to use multidimensional arrays in PHP code.

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

Here is some examples of how to use superglobals in PHP code.

```php

    echo $_SERVER['PHP_SELF'];
    echo $_SERVER['SERVER_NAME'];
    echo $_SERVER['HTTP_HOST'];
    echo $_SERVER['HTTP_USER_AGENT'];
    echo $_SERVER['SCRIPT_NAME'];
    //some other superglobals are: $_GET, $_POST, $_FILES, $_COOKIE, $_SESSION


```

Here is some examples of how to use cookies in PHP code.

```php

    setcookie("name", "value", time() + 3600, "/"); //set cookie with name, value, expiration time, path
    echo $_COOKIE["name"];  //get cookie value

```

Here is some examples of how to use sessions in PHP code.

```php

    session_start(); //start session (session must be started before any output)
    $_SESSION["name"] = "value"; //set session variable
    echo $_SESSION["name"]; //get session variable

```

Here is some examples of how to use file handling in PHP code.

```php

    $file = fopen("file.txt", "w"); //open file for writing (create if not exists)
    fwrite($file, "Hello World"); //write to file
    fclose($file); //close file
    $file = fopen("file.txt", "r"); //open file for reading
    echo fread($file, filesize("file.txt")); //read from file
    fclose($file); //close file

```

Here is some examples of how to use JSON in PHP code.

```php

    $arr = array("key1" => 1, "key2" => 2, "key3" => 3); //associative array with 3 key-value pairs
    echo json_encode($arr); //convert array to JSON string
    $json = '{"key1":1,"key2":2,"key3":3}'; //JSON string
    $arr = json_decode($json, true); //convert JSON string to array
    echo $arr["key1"];
    echo $arr["key2"];
    echo $arr["key3"];


```

Here is some examples of how to use OOP in PHP code.

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

Here is some examples of how to use exceptions in PHP code.
Exceptions are used to handle errors and other exceptional events in PHP code.
Same as Java and JavaScript, PHP has a try-catch block for exception handling.

```php

    try{
        throw new Exception("An error occurred"); //throw exception
    }catch(Exception $e){ //catch exception
        echo $e->getMessage();
    }

```
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

Exempel på funktion som kan användas för att förhindra enklare SQL injection i PHP-kod

```php
    function sanitize($input){
        $input = stripslashes($input); //remove backslashes
        $input = htmlspecialchars($input); //convert special characters to HTML entities
        $input = filter_var($input, FILTER_SANITIZE_STRING); //sanitize string
        return $input;
    }

    $var1 = sanitize($_POST['someInput']);  //this is how you utilize the function
```




