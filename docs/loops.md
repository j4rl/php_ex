# Loops in PHP code.
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
- Infinite loops can be created by using `while(true)` or `for(;;)`, but they should be avoided unless necessary.
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
Foreach loop is used to iterate over arrays or objects and very useful for working with collections of data.

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
- Foreach loop can be used with generators to iterate over a sequence of values without creating an array in memory.
    ```php
        function myGenerator(){
            for($i = 0; $i < 10; $i++){
                yield $i; //yield keyword is used to return a value from the generator
            }
        }
        foreach(myGenerator() as $value){
            echo $value;
        }
    ```
- Foreach loop can be used with references to modify the original array elements.
    ```php
        $arr = array(1, 2, 3, 4, 5);
        foreach($arr as &$value){ //use & to create a reference to the original array element
            $value *= 2; //double the value
        }
        unset($value); //unset the reference to avoid accidental modification of the last element
        print_r($arr); //output: Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 )
    ```