# Variables, operators and logical operators in PHP code.
## Examples of how to use variables in PHP code.

```php	

    $var1 = "Hello";
    $var2 = "World";
    echo $var1 . " " . $var2;

```
- **String concatenation** is done using the dot (`.`) operator.
- **Variable interpolation** can be done using double quotes.
- **Comments** can be single line (`//` or `#`) or multi-line (`/* */`).

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
- **Increment** operator (`++`) and **decrement** operator (`--`) can be used to increase or decrease a variable by 1.
- **Compound assignment** operators (`+=`, `-=`, `*=`, `/=`, `%=`) can be used to perform an operation and assign the result to the same variable.

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
- **Identical** operator (`===`) checks if two variables are equal and of the same type.
- **Not identical** operator (`!==`) checks if two variables are not equal or not of the same type.
- **Spaceship** operator (`<=>`) returns -1, 0, or 1 when $var1 is respectively less than, equal to, or greater than $var2.
- **Null coalescing** operator (`??`) returns its first operand if it exists and is not null; otherwise, it returns its second operand.
- **Ternary** operator (`condition ? expr1 : expr2`) is a shorthand for if-else statement.
- **Elvis** operator (`?:`) is a shorthand for ternary operator when the middle expression is the same as the first.


## How to use logical operators in PHP code.

```php

    $var1 = 10;
    $var2 = 20;
    echo $var1 == 10 && $var2 == 20; //and
    echo $var1 == 10 || $var2 == 20; //or
    echo !($var1 == 10 && $var2 == 20); //not (negation) 
    echo $var1 == 10 xor $var2 == 20; //xor (exclusive or)

```
- **and** operator has lower precedence than && operator. 
- **or** operator has lower precedence than || operator.
- **xor** operator returns true if either $var1 or $var2 is true, but not both.
- **!** operator has higher precedence than && and || operators.
- Parentheses can be used to group expressions and change the precedence.
(Precedence means which operator is evaluated first in an expression with multiple operators)