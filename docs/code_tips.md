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
The main protection against SQL injection is prepared statements with parameters.
Do not build SQL by concatenating user input into the query string.

```php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    $conn = new mysqli("localhost", "root", "", "php_ex");
    $conn->set_charset("utf8mb4");

    $email = trim($_POST["email"] ?? "");
    $name = trim($_POST["name"] ?? "");

    $stmt = $conn->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $email);
    $stmt->execute();
```
- Use prepared statements and parameterized queries to prevent SQL injection.
- Validate input before using it. Example: `filter_var($email, FILTER_VALIDATE_EMAIL)` for an email address.
- Cast or validate numeric IDs before use. Example: `filter_input(INPUT_POST, "id", FILTER_VALIDATE_INT)`.
- Use stored procedures or an ORM only if they also parameterize values correctly.
- `mysqli_real_escape_string()` can reduce risk when used correctly, but prepared statements are the safer default.

**Escaping output**

SQL protection and HTML protection are different tasks. Use prepared statements for SQL, and escape values when showing them on a web page.

```php
    function h(?string $value): string
    {
        return htmlspecialchars($value ?? "", ENT_QUOTES, "UTF-8");
    }

    echo h($_POST["someInput"] ?? "");
```
- Escape all user-controlled output with `htmlspecialchars()` before rendering it in HTML.
- Escape attribute values too, for example `href`, `title`, `value`, and `aria-label`.
- Do not rely on `htmlspecialchars()` as SQL injection protection.
- Avoid `FILTER_SANITIZE_STRING`; validate expected formats instead.
- Use HTTPS to encrypt data transmitted between the client and server.
- Keep your PHP version and libraries up to date to ensure you have the latest security patches.
