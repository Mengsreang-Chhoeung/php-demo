# Learn PHP

**PHP** is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.

**PHP** is a widely-used, free, and efficient alternative to competitors such as Microsoft's ASP.

## PHP Introduction

**PHP** code is executed on the server.

### What You Should Already Know?

Before you continue you should have a basic understanding of the following:

- [HTML](https://www.w3schools.com/html/default.asp)
- [CSS](https://www.w3schools.com/css/default.asp)
- [JavaScript](https://www.w3schools.com/js/default.asp)

### What is PHP?

- **PHP** is an acronym for "`PHP: Hypertext Preprocessor`"
- **PHP** is a widely-used, open source scripting language
- **PHP** scripts are executed on the server
- **PHP** is free to download and use

### PHP is an amazing and popular language!

It is powerful enough to be at the core of the biggest blogging system on the web (**WordPress**)!
It is deep enough to run large social networks!
It is also easy enough to be a beginner's first server side language!

### What is a PHP File?

- **PHP** files can contain text, **HTML**, **CSS**, **JavaScript**, and **PHP** code
- **PHP** code is executed on the server, and the result is returned to the browser as plain **HTML**
- **PHP** files have extension "`.php`"

### What Can PHP Do?

- **PHP** can generate dynamic page content
- **PHP** can create, open, read, write, delete, and close files on the server
- **PHP** can collect form data
- **PHP** can send and receive cookies
- **PHP** can add, delete, modify data in your database
- **PHP** can be used to control user-access
  **PHP** can encrypt data

With **PHP** you are not limited to output **HTML**. You can output images or **PDF** files. You can also output any text, such as **XHTML** and **XML**.

### Why PHP?

- **PHP** runs on various platforms (**Windows**, **Linux**, **Unix**, **Mac OS X**, etc.)
- **PHP** is compatible with almost all servers used today (**Apache**, **IIS**, etc.)
- **PHP** supports a wide range of databases
- **PHP** is free. Download it from the official **PHP** resource: [www.php.net](https://www.php.net)
- **PHP** is easy to learn and runs efficiently on the server side

### What's new in PHP 7

- **PHP 7** is much faster than the previous popular stable release (PHP 5.6)
- **PHP 7** has improved Error Handling
- **PHP 7** supports stricter Type Declarations for function arguments
- **PHP 7** supports new operators (like the spaceship operator: `<=>`)

## PHP Installation

To start using **PHP**, you can:

- Find a web host with **PHP** and **MySQL** support
- Install a web server on your own **PC**, and then install **PHP** and **MySQL**

### Use a Web Host With PHP Support

If your server has activated support for **PHP** you do not need to do anything.

Just create some `.php` files, place them in your web directory, and the server will automatically parse them for you.

You do not need to compile anything or install any extra tools.

Because **PHP** is free, most web hosts offer **PHP** support.

### Set Up PHP on Your Own PC

However, if your server does not support **PHP**, you must:

- install a web server
- install **PHP**
- install a database, such as **MySQL**

The official **PHP** website (PHP.net) has installation instructions for PHP: [http://php.net/manual/en/install.php](http://php.net/manual/en/install.php)

## PHP Syntax

A **PHP** script is executed on the server, and the plain **HTML** result is sent back to the browser.

### Basic PHP Syntax

A **PHP** script can be placed anywhere in the document.

A **PHP** script starts with `<?php` and ends with `?>`:

```php
<?php
  // PHP code goes here
?>
```

The default file extension for **PHP** files is "`.php`".

A **PHP** file normally contains **HTML** tags, and some **PHP** scripting code.

Below, we have an example of a simple **PHP** file, with a **PHP** script that uses a built-in **PHP** function "`echo`" to output the text "`Hello World!`" on a web page:

```php
<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
  echo "Hello World!";
?>

</body>
</html>
```

**Note:** **PHP** statements end with a semicolon (`;`).

### PHP Case Sensitivity

In **PHP**, keywords (e.g. `if`, `else`, `while`, `echo`, etc.), `classes`, `functions`, and `user-defined functions` are `not case-sensitive`.

In the example below, all three echo statements below are equal and legal:

```php
<!DOCTYPE html>
<html>
<body>

<?php
  ECHO "Hello World!<br>";
  echo "Hello World!<br>";
  EcHo "Hello World!<br>";
?>

</body>
</html>
```

**Note:** However; all variable names are case-sensitive!

Look at the example below; only the first statement will display the value of the `$color` variable! This is because `$color`, `$COLOR`, and `$coLOR` are treated as three different variables:

```php
<!DOCTYPE html>
<html>
<body>

<?php
  $color = "red";
  echo "My car is " . $color . "<br>";
  echo "My house is " . $COLOR . "<br>";
  echo "My boat is " . $coLOR . "<br>";
?>

</body>
</html>
```

## PHP Comments

A comment in **PHP** code is a line that is not executed as a part of the program. Its only purpose is to be read by someone who is looking at the code.

Comments can be used to:

- Let others understand your code
- Remind yourself of what you did - Most programmers have experienced coming back to their own work a year or two later and having to re-figure out what they did. Comments can remind you of what you were thinking when you wrote the code

**PHP** supports several ways of commenting:

```php
<!DOCTYPE html>
<html>
<body>

<?php
  // This is a single-line comment

  # This is also a single-line comment

  /*
    This is a multiple-lines comment block
    that spans over multiple
    lines
  */

  // You can also use comments to leave out parts of a code line
  $x = 5 /* + 15 */ + 5;
  echo $x;
?>

</body>
</html>
```

## PHP Variables

Variables are "`containers`" for storing information.

### Creating (Declaring) PHP Variables

In **PHP**, a variable starts with the `$` sign, followed by the name of the variable:

```php
<?php
  $txt = "Hello world!";
  $x = 5;
  $y = 10.5;
?>
```

After the execution of the statements above, the variable `$txt` will hold the value `Hello world!`, the variable `$x` will hold the value `5`, and the variable `$y` will hold the value `10.5`.

**Note:** When you assign a text value to a variable, put quotes around the value.

**Note:** Unlike other programming languages, **PHP** has no command for declaring a variable. It is created the moment you first assign a value to it.

`Think of variables as containers for storing data.`

### PHP Variables

A variable can have a short name (like `x` and `y`) or a more descriptive name (`age`, `carname`, `total_volume`).

Rules for **PHP** variables:

- A variable starts with the `$` sign, followed by the name of the variable
- A variable name must start with a `letter` or the `underscore character`
- A variable name cannot `start with a number`
- A variable name can only contain alpha-numeric characters and underscores (`A-z`, `0-9`, and `_` )
- Variable names are `case-sensitive` (`$age` and `$AGE` are two different variables)

`Remember that PHP variable names are case-sensitive!`

### Output Variables

The **PHP** echo statement is often used to output data to the screen.

The following example will show how to output text and a variable:

```php
<?php
  $txt = "W3Schools.com";
  echo "I love $txt!";
?>
```

The following example will produce the same output as the example above:

```php
<?php
  $txt = "W3Schools.com";
  echo "I love " . $txt . "!";
?>
```

The following example will output the sum of two variables:

```php
<?php
  $x = 5;
  $y = 4;
  echo $x + $y;
?>
```

**Note:** You will learn more about the echo statement and how to output data to the screen in the next chapter.

### PHP is a Loosely Typed Language

In the example above, notice that we did not have to tell **PHP** which data type the variable is.

**PHP** automatically associates a data type to the variable, depending on its value. Since the data types are not set in a strict sense, you can do things like adding a string to an integer without causing an error.

In **PHP 7**, type declarations were added. This gives an option to specify the data type expected when declaring a function, and by enabling the strict requirement, it will throw a "`Fatal Error`" on a type mismatch.

You will learn more about `strict` and `non-strict` requirements, and data type declarations in the [PHP Functions](https://www.w3schools.com/php/php_functions.asp) chapter.

## PHP Variables Scope

In **PHP**, variables can be declared anywhere in the script.

The scope of a variable is the part of the script where the variable can be referenced/used.

**PHP** has three different variable scopes:

- local
- global
- static

### Global and Local Scope

A variable declared `outside` a function has a `GLOBAL SCOPE` and can only be accessed outside a function:

```php
<?php
  $x = 5; // global scope

  function myTest() {
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
  }
  myTest();

  echo "<p>Variable x outside function is: $x</p>";
?>
```

A variable declared `within` a function has a `LOCAL SCOPE` and can only be accessed within that function:

```php
<?php
  function myTest() {
    $x = 5; // local scope
    echo "<p>Variable x inside function is: $x</p>";
  }
  myTest();

  // using x outside the function will generate an error
  echo "<p>Variable x outside function is: $x</p>";
?>
```

`You can have local variables with the same name in different functions, because local variables are only recognized by the function in which they are declared.`

### PHP The global Keyword

The `global` keyword is used to access a global variable from within a function.

To do this, use the `global` keyword before the variables (inside the function):

```php
<?php
  $x = 5;
  $y = 10;

  function myTest() {
    global $x, $y;
    $y = $x + $y;
  }

  myTest();
  echo $y; // outputs 15
?>
```

**PHP** also stores all global variables in an array called `$GLOBALS[index]`. The `index` holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.

The example above can be rewritten like this:

```php
<?php
  $x = 5;
  $y = 10;

  function myTest() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
  }

  myTest();
  echo $y; // outputs 15
?>
```

### PHP The static Keyword

Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.

To do this, use the `static` keyword when you first declare the variable:

```php
<?php
  function myTest() {
    static $x = 0;
    echo $x;
    $x++;
  }

  myTest();
  myTest();
  myTest();
?>
```

Then, each time the function is called, that variable will still have the information it contained from the last time the function was called.

**Note:** The variable is still local to the function.

## PHP echo and print Statements

With **PHP**, there are two basic ways to get output: `echo` and `print`.

In this tutorial we use `echo` or `print` in almost every example. So, this chapter contains a little more info about those two output statements.

### PHP echo and print Statements

`echo` and `print` are more or less the same. They are both used to output data to the screen.

The differences are small: `echo` has no return value while `print` has a return value of 1 so it can be used in expressions. `echo` can take multiple parameters (although such usage is rare) while `print` can take one argument. `echo` is marginally faster than `print`.

### The PHP echo Statement

The `echo` statement can be used with or without parentheses: `echo` or `echo()`.

**Display Text:**

The following example shows how to output text with the `echo` command (notice that the text can contain **HTML** markup):

```php
<?php
  echo "<h2>PHP is Fun!</h2>";
  echo "Hello world!<br>";
  echo "I'm about to learn PHP!<br>";
  echo "This ", "string ", "was ", "made ", "with multiple parameters.";
?>
```

**Display Variables:**

The following example shows how to output text and variables with the `echo` statement:

```php
<?php
  $txt1 = "Learn PHP";
  $txt2 = "W3Schools.com";
  $x = 5;
  $y = 4;

  echo "<h2>" . $txt1 . "</h2>";
  echo "Study PHP at " . $txt2 . "<br>";
  echo $x + $y;
?>
```

### The PHP print Statement

The `print` statement can be used with or without parentheses: `print` or `print()`.

**Display Text:**

The following example shows how to output text with the `print` command (notice that the text can contain **HTML** markup):

```php
<?php
  print "<h2>PHP is Fun!</h2>";
  print "Hello world!<br>";
  print "I'm about to learn PHP!";
?>
```

**Display Variables:**

The following example shows how to output text and variables with the `print` statement:

```php
<?php
  $txt1 = "Learn PHP";
  $txt2 = "W3Schools.com";
  $x = 5;
  $y = 4;

  print "<h2>" . $txt1 . "</h2>";
  print "Study PHP at " . $txt2 . "<br>";
  print $x + $y;
?>
```

## PHP Data Types

Variables can store data of different types, and different data types can do different things.

**PHP** supports the following data types:

- String
- Integer
- Float (floating point numbers - also called double)
- Boolean
- Array
- Object
- NULL
- Resource

### PHP String

A string is a sequence of characters, like "Hello world!".

A string can be any text inside quotes. You can use `single` or `double quotes`:

```php
<?php
$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "<br>";
echo $y;
?>
```

### PHP Integer

An integer data type is a non-decimal number between `-2,147,483,648` and `2,147,483,647`.

Rules for integers:

- An integer must have at least one digit
- An integer must not have a decimal point
- An integer can be either positive or negative
- Integers can be specified in: decimal (base 10), hexadecimal (base 16), octal (base 8), or binary (base 2) notation

In the following example `$x` is an integer. The PHP `var_dump()` function returns the data type and value:

```php
<?php
$x = 5985;
var_dump($x);
?>
```

### PHP Float

A float (floating point number) is a number with a decimal point or a number in exponential form.

In the following example `$x` is a float. The PHP `var_dump()` function returns the data type and value:

```php
<?php
$x = 10.365;
var_dump($x);
?>
```

### PHP Boolean

A Boolean represents two possible states: `TRUE` or `FALSE`.

```php
<?php
$x = true;
$y = false;
?>
```

Booleans are often used in conditional testing.

### PHP Array

An array stores multiple values in one single variable.

In the following example `$cars` is an array. The PHP `var_dump()` function returns the data type and value:

```php
<?php
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
?>
```

### PHP Object

Classes and objects are the two main aspects of object-oriented programming.

A class is a template for objects, and an object is an instance of a class.

When the individual objects are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.

Let's assume we have a class named Car. A Car can have properties like model, color, etc. We can define variables like $model, $color, and so on, to hold the values of these properties.

When the individual objects (Volvo, BMW, Toyota, etc.) are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.

If you create a `__construct()` function, PHP will automatically call this function when you create an object from a class.

```php
<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
?>
```

### PHP NULL Value

Null is a special data type which can have only one value: NULL.

A variable of data type NULL is a variable that has no value assigned to it.

**Tip:** If a variable is created without a value, it is automatically assigned a value of NULL.

Variables can also be emptied by setting the value to NULL:

```php
<?php
$x = "Hello world!";
$x = null;
var_dump($x);
?>
```

### PHP Resource

The special resource type is not an actual data type. It is the storing of a reference to functions and resources external to PHP.

A common example of using the resource data type is a database call.

We will not talk about the resource type here, since it is an advanced topic.

## PHP Strings

A string is a sequence of characters, like "Hello world!".

### PHP String Functions

In this chapter we will look at some commonly used functions to manipulate strings.

**`strlen()` - Return the Length of a String**

The PHP `strlen()` function returns the length of a string.

```php
<?php
echo strlen("Hello world!"); // outputs 12
?>
```

**`str_word_count()` - Count Words in a String**
The PHP `str_word_count()` function counts the number of words in a string.

```php
<?php
echo str_word_count("Hello world!"); // outputs 2
?>
```

**`strrev()` - Reverse a String**
The PHP `strrev()` function reverses a string.

```php
<?php
echo strrev("Hello world!"); // outputs !dlrow olleH
?>
```

**`strpos()` - Search For a Text Within a String**
The PHP `strpos()` function searches for a specific text within a string. If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.

```php
<?php
echo strpos("Hello world!", "world"); // outputs 6
?>
```

**Tip:** The first character position in a string is 0 (not 1).

**`str_replace()` - Replace Text Within a String**
The PHP `str_replace()` function replaces some characters with some other characters in a string.

```php
<?php
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
?>
```

## PHP Numbers

In this chapter we will look in depth into Integers, Floats, and Number Strings.

### PHP Numbers

One thing to notice about PHP is that it provides automatic data type conversion.

So, if you assign an integer value to a variable, the type of that variable will automatically be an integer. Then, if you assign a string to the same variable, the type will change to a string.

This automatic conversion can sometimes break your code.

### PHP Integers

2, 256, -256, 10358, -179567 are all integers.

An integer is a number without any decimal part.

An integer data type is a non-decimal number between `-2147483648` and `2147483647` in `32 bit systems`, and between `-9223372036854775808` and `9223372036854775807` in `64 bit systems`. A value greater (or lower) than this, will be stored as float, because it exceeds the limit of an integer.

**Note:** Another important thing to know is that even if 4 \* 2.5 is 10, the result is stored as float, because one of the operands is a float (2.5).

Here are some rules for integers:

- An integer must have at least one digit
- An integer must NOT have a decimal point
- An integer can be either positive or negative
- Integers can be specified in three formats: decimal (10-based), hexadecimal (16-based - prefixed with 0x) or octal (8-based - prefixed with 0)

PHP has the following predefined constants for integers:

- PHP_INT_MAX - The largest integer supported
- PHP_INT_MIN - The smallest integer supported
- PHP_INT_SIZE - The size of an integer in bytes

PHP has the following functions to check if the type of a variable is integer:

- is_int()
- is_integer() - alias of is_int()
- is_long() - alias of is_int()

```php
<?php
$x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));
?>
```

### PHP Floats

A float is a number with a decimal point or a number in exponential form.

2.0, 256.4, 10.358, 7.64E+5, 5.56E-5 are all floats.

The float data type can commonly store a value up to `1.7976931348623E+308` (platform dependent), and have a `maximum precision of 14 digits`.

PHP has the following predefined constants for floats (from PHP 7.2):

- PHP_FLOAT_MAX - The largest representable floating point number
- PHP_FLOAT_MIN - The smallest representable positive floating point number
- PHP_FLOAT_DIG - The number of decimal digits that can be rounded into a float and back without precision loss
- PHP_FLOAT_EPSILON - The smallest representable positive number x, so that x + 1.0 != 1.0

PHP has the following functions to check if the type of a variable is float:

- is_float()
- is_double() - alias of is_float()

```php
<?php
$x = 10.365;
var_dump(is_float($x));
?>
```

### PHP Infinity

A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.

PHP has the following functions to check if a numeric value is finite or infinite:

- is_finite()
- is_infinite()

However, the PHP `var_dump()` function returns the data type and value:

```php
<?php
$x = 1.9e411;
var_dump($x);
?>
```

### PHP NaN

NaN stands for Not a Number.

NaN is used for impossible mathematical operations.

PHP has the following functions to check if a value is not a number:

- is_nan()

However, the PHP `var_dump()` function returns the data type and value:

```php
<?php
$x = acos(8);
var_dump($x);
?>
```

### PHP Numerical Strings

The PHP is_numeric() function can be used to find whether a variable is numeric. The function returns true if the variable is a number or a numeric string, false otherwise.

```php
<?php
$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));

$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));
?>
```

**Note:** From PHP 7.0: The is_numeric() function will return FALSE for numeric strings in hexadecimal form (e.g. 0xf4c3b00c), as they are no longer considered as numeric strings.

### PHP Casting Strings and Floats to Integers

Sometimes you need to cast a numerical value into another data type.

The (int), (integer), or intval() function are often used to convert a value to an integer.

```php
<?php
// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
?>
```

## PHP Math

PHP has a set of math functions that allows you to perform mathematical tasks on numbers.

**PHP `pi()` Function**

The `pi()` function returns the value of PI:

```php
<?php
echo(pi()); // returns 3.1415926535898
?>
```

**PHP `min()` and `max()` Functions**

The `min()` and `max()` functions can be used to find the lowest or highest value in a list of arguments:

```php
<?php
echo(min(0, 150, 30, 20, -8, -200));  // returns -200
echo(max(0, 150, 30, 20, -8, -200));  // returns 150
?>
```

**PHP `abs()` Function**

The `abs()` function returns the absolute (positive) value of a number:

```php
<?php
echo(abs(-6.7));  // returns 6.7
?>
```

**PHP `sqrt()` Function**

The `sqrt()` function returns the square root of a number:

```php
<?php
echo(sqrt(64));  // returns 8
?>
```

**PHP `round()` Function**

The `round()` function rounds a floating-point number to its nearest integer:

```php
<?php
echo(round(0.60));  // returns 1
echo(round(0.49));  // returns 0
?>
```

**Random Numbers**

The `rand()` function generates a random number:

```php
<?php
echo(rand());
?>
```

To get more control over the random number, you can add the optional min and max parameters to specify the lowest integer and the highest integer to be returned.

For example, if you want a random integer between 10 and 100 (inclusive), use `rand(10, 100)`:

```php
<?php
echo(rand(10, 100));
?>
```

### 📜 References

- [W3Schools](https://www.w3schools.com/php)
- [Javatpoint](https://www.javatpoint.com/php-tutorial)

### 🤝 Contributors

- Mengsreang-Chhoeung [@mengsreang_dev](https://twitter.com/mengsreang_dev)
