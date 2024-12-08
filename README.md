# php_ex
PHP examples
- [This is a database example, with som error handling](linx.php)
- [This is an example of hidden input in forms](index.php)

Here are some examples of how to use variables in PHP code.
´´´php	
<?php
    $var1 = "Hello";
    $var2 = "World";
    echo $var1 . " " . $var2;
?>
´´´
Here is some examples of how to use arithmetic operators in PHP code.
´´´php
<?php
    $var1 = 10;
    $var2 = 20;
    echo $var1 + $var2;
    echo $var1 - $var2;
    echo $var1 * $var2;
    echo $var1 / $var2;
    echo $var1 % $var2;
?>
´´´
Here is some examples of how to use comparison operators in PHP code.
´´´php
<?php
    $var1 = 10;
    $var2 = 20;
    echo $var1 == $var2;
    echo $var1 != $var2;
    echo $var1 > $var2;
    echo $var1 < $var2;
    echo $var1 >= $var2;
    echo $var1 <= $var2;
?>
´´´
Here is some examples of how to use logical operators in PHP code.
´´´php
<?php
    $var1 = 10;
    $var2 = 20;
    echo $var1 == 10 && $var2 == 20;
    echo $var1 == 10 || $var2 == 20;
    echo !($var1 == 10 && $var2 == 20);
?>
´´´
Here is some examples of how to use if statements in PHP code.
´´´php
<?php
    $var1 = 10;
    $var2 = 20;
    if($var1 == 10){
        echo "var1 is 10";
    }
    if($var2 == 20){
        echo "var2 is 20";
    }
?>
´´´
Here is some examples of how to use switch statements in PHP code.
´´´php
<?php
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
?>
´´´
Here is some examples of how to use while loops in PHP code.
´´´php
<?php
    $var1 = 0;
    while($var1 < 10){
        echo $var1;
        $var1++;
    }
    //and here is a do while loop
    $var1 = 0;
    do{
        echo $var1;
        $var1++;
    }while($var1 < 10);
?>
´´´
Here is some examples of how to use for loops in PHP code.
´´´php
<?php
    for($i = 0; $i < 10; $i++){
        echo $i;
    }
?>
´´´
Here is some examples of how to use foreach loops in PHP code.
´´´php
<?php
    $arr = array(1, 2, 3, 4, 5);
    foreach($arr as $value){
        echo $value;
    }
?>
´´´
Here is some examples of how to use functions in PHP code.
´´´php
<?php
    function add($var1, $var2){
        return $var1 + $var2;
    }
    echo add(10, 20);
?>
´´´
Here is some examples of how to use arrays in PHP code.
´´´php
<?php
    $arr = array(1, 2, 3, 4, 5);
    echo $arr[0];
    echo $arr[1];
    echo $arr[2];
    echo $arr[3];
    echo $arr[4];
?>
´´´
Here is some examples of how to use associative arrays in PHP code.
´´´php
<?php
    $arr = array("key1" => 1, "key2" => 2, "key3" => 3);
    echo $arr["key1"];
    echo $arr["key2"];
    echo $arr["key3"];
?>
´´´
Here is some examples of how to use multidimensional arrays in PHP code.
´´´php
<?php
    $arr = array(array(1, 2, 3), array(4, 5, 6), array(7, 8, 9));
    echo $arr[0][0];
    echo $arr[0][1];
    echo $arr[0][2];
    echo $arr[1][0];
    echo $arr[1][1];
    echo $arr[1][2];
    echo $arr[2][0];
    echo $arr[2][1];
    echo $arr[2][2];
?>
´´´
Here is some examples of how to use superglobals in PHP code.
´´´php
<?php
    echo $_SERVER['PHP_SELF'];
    echo $_SERVER['SERVER_NAME'];
    echo $_SERVER['HTTP_HOST'];
    echo $_SERVER['HTTP_USER_AGENT'];
    echo $_SERVER['SCRIPT_NAME'];
?>
´´´ 
Here is some examples of how to use cookies in PHP code.
´´´php
<?php
    setcookie("name", "value", time() + 3600, "/");
    echo $_COOKIE["name"];
?>
´´´
Here is some examples of how to use sessions in PHP code.
´´´php
<?php
    session_start();
    $_SESSION["name"] = "value";
    echo $_SESSION["name"];
?>
´´´
Here is some examples of how to use file handling in PHP code.
´´´php
<?php
    $file = fopen("file.txt", "w");
    fwrite($file, "Hello World");
    fclose($file);
    $file = fopen("file.txt", "r");
    echo fread($file, filesize("file.txt"));
    fclose($file);
?>
´´´
Here is some examples of how to use error handling in PHP code.
´´´php
<?php
    function customError($errno, $errstr){
        echo "<b>Error:</b> [$errno] $errstr";
    }
    set_error_handler("customError");
    echo $test;
?>
´´´
Here is some examples of how to use exception handling in PHP code.
´´´php
<?php
    function customException($exception){
        echo "<b>Exception:</b> " . $exception->getMessage();
    }
    set_exception_handler("customException");
    throw new Exception("An exception has occurred");
?>
´´´
Here is some examples of how to use filters in PHP code.
´´´php
<?php
    $var = 10;
    if(!filter_var($var, FILTER_VALIDATE_INT)){
        echo "Integer is not valid";
    }else{
        echo "Integer is valid";
    }
?>
´´´
Here is some examples of how to use JSON in PHP code.
´´´php
<?php
    $arr = array("key1" => 1, "key2" => 2, "key3" => 3);
    echo json_encode($arr);
?>
´´´
Here is some examples of how to use OOP in PHP code.
´´´php
<?php
    class MyClass{
        public $var1 = "Hello";
        public $var2 = "World";
        public function myFunction(){
            return $this->var1 . " " . $this->var2;
        }
    }
    $obj = new MyClass();
    echo
    $obj->myFunction();
?>
´´´
Here is some examples of how to use namespaces in PHP code.
´´´php
<?php
    namespace MyNamespace;
    class MyClass{
        public $var1 = "Hello";
        public $var2 = "World";
        public function myFunction(){
            return $this->var1 . " " . $this->var2;
        }
    }
    $obj = new MyClass();
    echo
    $obj->myFunction();
?>
´´´
Here is some examples of how to use traits in PHP code.
´´´php
<?php
    trait MyTrait{
        public function myFunction(){
            return "Hello World";
        }
    }
    class MyClass{
        use MyTrait;
    }
    $obj = new MyClass();
    echo
    $obj->myFunction();
?>
´´´
Here is some examples of how to use interfaces in PHP code.
´´´php
<?php
    interface MyInterface{
        public function myFunction();
    }
    class MyClass implements MyInterface{
        public function myFunction(){
            return "Hello World";
        }
    }
    $obj = new MyClass();
    echo
    $obj->myFunction();
?>
´´´
Here is some examples of how to use abstract classes in PHP code.
´´´php
<?php
    abstract class MyAbstractClass{
        public $var1 = "Hello";
        public $var2 = "World";
        public function myFunction(){
            return $this->var1 . " " . $this->var2;
        }
    }
    class MyClass extends MyAbstractClass{
    }
    $obj = new MyClass();
    echo
    $obj->myFunction();
?>
´´´

