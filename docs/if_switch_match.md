# Conditional Statements in PHP
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
- else if can be written as `elseif` (one word).
- Curly braces (`{}`) can be omitted if there is only one statement in the block, but it is recommended to always use them for better readability and to avoid errors.
- Ternary operator can be used as a shorthand for `if-else` statement.
    - Example: `$result = ($var1 == 10) ? "var1 is 10" : "var1 is not 10";`
    - Above is equivalent to:
    ```php
        if($var1 == 10){
            $result = "var1 is 10";
        }else{
            $result = "var1 is not 10";
        }
    ```
- Null coalescing operator can be used to check if a variable is set and not null.
    - Example: `$value = $var1 ?? "default value";`
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
- Switch uses loose comparison (==) for case matching, unlike match which uses strict comparison (===).

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
- Default case is optional. If no case matches and there is no default case, a `UnhandledMatchError` will be thrown.
- Match uses strict comparison (===) for case matching, unlike switch which uses loose comparison (==).