<h3>Question 1</h3>
<?php
  // Question 1
  echo "Hello, World <br />"
  echo "Hello back";
?>

<hr />
<h3>Question 2</h3>

<?php
  // Question 2
  $greeting = "Good morning";
  echo $Greeting;
?>

<hr />
<h3>Question 3</h3>

<?php
  // Question 3
  $firstName = "John";
  $lastName = "Doe";
  echo "Name: " + $firstName + " " + $lastName;
?>

<hr />
<h3>Question 4</h3>

<?php
  // Question 4
  $colors = array("Red", "Green", "Blue";
  echo $colors[1];
?>

<hr />
<h3>Question 5</h3>

<?php
  // Question 5
  function greet($name) {
    echo "Hello, " . $name;
  }
  greet();
?>

<hr />
<h3>Question 6</h3>

<?php
  // Question 6: Be careful, this will not result in a loud error, it's just going to be wrong. Read the code to figure out what it SHOULD do, and make sure it does that.
  $age = 20;
  if ($age = 18) {
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
  echo 'Count: ' + ++$count;
?>

<hr />
<h3>Question 8</h3>

<?php
  // Question 8
  define("GREETING", "Hello, everyone.");
  echo GREETINGS;
?>

<hr />
<h3>Question 9</h3>

<?php
  // Question 9: this test will also not generate an error, but there is something wrong with it.
  function sayHello() {
    echo "Hello!";
  }
  sayHello("John");
?>

<hr />
<h3>Question 10</h3>

<?php
  // Question 10
  $user = array("name" => "John Doe", "age" => 30);
  echo $user[name];
?>
