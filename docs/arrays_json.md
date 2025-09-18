# Arrays and JSON in PHP code.
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
- Arrays can be created using the `array()` function or the shorthand `[]` syntax (PHP 5.4+).
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
- Arrays can be sorted using built-in functions like `sort()`, `rsort()`, `asort()`, `arsort()`, `ksort()`, `krsort()`.
    ```php
        $arr = array(3, 1, 4, 2);
        sort($arr); //sort array in ascending order
        rsort($arr); //sort array in descending order
        asort($arr); //sort array by values in ascending order, maintain key association
        arsort($arr); //sort array by values in descending order, maintain key association
        ksort($arr); //sort array by keys in ascending order
        krsort($arr); //sort array by keys in descending order
    ```
- Arrays can be merged using array_merge() function.
    ```php
        $arr1 = array(1, 2, 3);
        $arr2 = array(4, 5, 6);
        $arr3 = array_merge($arr1, $arr2); //merge two arrays
        // $arr3 is now array(1, 2, 3, 4, 5, 6)
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
- Associative arrays can be created using the `array()` function or the shorthand `[]` syntax (PHP 5.4+).
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
- Associative arrays and JSON objects are very similar in PHP, and can be converted between each other using `json_encode()` and `json_decode()` functions.
```php
    $arr = array("key1" => 1, "key2" => 2, "key3" => 3); //associative array
    $json = json_encode($arr); //convert array to JSON string
    echo $json; //print JSON string
    // The print output will be: {"key1":1,"key2":2,"key3":3}
    $arr2 = json_decode($json, true); //convert JSON string to associative array
    print_r($arr2); //print associative array
    // The print output will be:
    // Array
    // (
    //     [key1] => 1
    //     [key2] => 2
    //     [key3] => 3
    // )
```
- Using Associative arrays with SQL answers to get the code more readable in while fetching data from a database.
```php
    $result = mysqli_query($conn, "SELECT id, name, email FROM users"); //execute SQL query
    while($row = mysqli_fetch_assoc($result)){ //fetch associative array for each row
        echo "ID: " . $row["id"] . " Name: " . $row["name"] . " Email: " . $row["email"];
    }
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
- Use built-in functions like `array_map()`, `array_filter()`, `array_reduce()` to manipulate arrays.
- Use foreach loops to iterate over arrays.
- Ask yourself if you really need a multidimensional array, or if a single-dimensional array or an object would be more appropriate.

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
- JSON can be encoded using the `json_encode()` function and decoded using the `json_decode()` function.
- `json_decode()` function can return an associative array if the second parameter is set to true, otherwise it returns an object.
- JSON is commonly used for data exchange between a server and a web application.
- Always validate and sanitize JSON data before using it.
- Use `json_last_error()` function to check for errors after encoding or decoding JSON.