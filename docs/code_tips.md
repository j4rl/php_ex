# Code examples
## Superglobals in PHP code.

```php

    echo $_SERVER['PHP_SELF']; //current script name i.e. /index.php
    echo $_SERVER['SERVER_ADDR']; //server IP address i.e. 127.0.0.1
    echo $_SERVER['SERVER_NAME']; //server name i.e. localhost
    echo $_SERVER['HTTP_HOST']; //HTTP host i.e. localhost
    echo $_SERVER['HTTP_USER_AGENT']; //HTTP user agent i.e. Mozilla/5.0
    echo $_SERVER['SCRIPT_NAME']; //script name i.e. /index.php
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
- Cookies can be set using the `setcookie()` function.
- Cookies can be accessed using the `$_COOKIE` superglobal array.
- Cookies can have an expiration time, after which they will be deleted.

## How to use sessions in PHP code.

```php

    session_start(); //start session (session must be started before any output)
    $_SESSION["name"] = "value"; //set session variable
    echo $_SESSION["name"]; //get session variable

```
- Sessions are used to store information about the user across multiple pages.
- Sessions are started using the `session_start()` function. (must be called before any output)
- Session variables are stored in the `$_SESSION` superglobal array.
- Sessions can be destroyed using the `session_destroy()` function.

## File handling in PHP code.

```php

    $file = fopen("file.txt", "w"); //open file for writing (create if not exists)
    fwrite($file, "Hello World"); //write to file
    fclose($file); //close file
    $file = fopen("file.txt", "r"); //open file for reading
    echo fread($file, filesize("file.txt")); //read from file
    fclose($file); //close file

```
- Files can be opened using the `fopen()` function with different modes (r, w, a, r+, w+, a+).
- Files can be read using the `fread()` function and written using the `fwrite()` function.
- Files should be closed using the `fclose()` function to free up resources.
- Other useful file functions include `file_get_contents()`, `file_put_contents()`, `file_exists()`, `unlink()`, `rename()`, `copy()`, `is_readable()`, `is_writable()`.
- Always check if the file exists before trying to read or write to it.

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
- Use built-in functions like `htmlspecialchars()`, `filter_var()`, and `mysqli_real_escape_string()` to sanitize user input.
- Use regular expressions to validate user input.
- Never trust user input, always assume it is malicious. (Never trust a Klingon)
- Use HTTPS to encrypt data transmitted between the client and server.
- Keep your PHP version and libraries up to date to ensure you have the latest security patches.
- Use a web application firewall (WAF) to protect against SQL injection and other attacks.