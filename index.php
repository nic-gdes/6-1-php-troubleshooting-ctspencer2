<h3>Question 1</h3>
<?php
  // Question 1
  echo "Hello, World <br />";
  echo "Hello back"; // The semicolon was missing after the first echo statement.
?>

<hr />
<h3>Question 2</h3>

<?php
  // Question 2
  $greeting = "Good morning";
  echo $greeting; // Variable names are case-sensitive. Use $greeting instead of $Greeting.
?>

<hr />
<h3>Question 3</h3>

<?php
  // Question 3
  $firstName = "John";
  $lastName = "Doe";
  echo "Name: " . $firstName . " " . $lastName; // Use the concatenation operator '.' instead of '+'
?>

<hr />
<h3>Question 4</h3>

<?php
  // Question 4
  $colors = array("Red", "Green", "Blue");
  echo $colors[1]; // Missing closing parenthesis for the array declaration.
?>

<hr />
<h3>Question 5</h3>

<?php
  // Question 5
  function greet($name = "Guest") { // Provide a default value for $name or ensure a value is passed to greet()
    echo "Hello, " . $name;
  }
  greet();
?>

<hr />
<h3>Question 6</h3>

<?php
  // Question 6: Be careful, this will not result in a loud error, it's just going to be wrong. Read the code to figure out what it SHOULD do, and make sure it does that.
  $age = 20;
  if ($age == 18) { // Use '==' for comparison instead of '='
      echo "You are 18 years old.";
  } else {
    echo "You are not 18 years old.";
  }
?>

<hr />
<h3>Question 7</h3>

<?php
  // Question 7
  $count = 0;
  echo 'Count: ' . ++$count; // Use '.' for concatenation, not '+'
?>

<hr />
<h3>Question 8</h3>

<?php
  // Question 8
  define("GREETING", "Hello, everyone.");
  echo GREETING; // The constant name should match the defined one.
?>

<hr />
<h3>Question 9</h3>

<?php
  // Question 9: this test will also not generate an error, but there is something wrong with it.
  function sayHello($name = "") { // Define the function to optionally accept a parameter
    if ($name) {
      echo "Hello, $name!";
    } else {
      echo "Hello!";
    }
  }
  sayHello("John");
?>

<hr />
<h3>Question 10</h3>

<?php
  // Question 10
  $user = array("name" => "John Doe", "age" => 30);
  echo $user['name']; // Use quotes for array keys.
?>
