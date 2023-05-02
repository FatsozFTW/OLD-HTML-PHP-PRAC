<?php
error_reporting(E_ALL);
//ini_set("display_errors", 1);

function total()
{
  $all = 0;
  if($_POST["q1"] == "Albedo")
  {
    $all++;
  }
  if($_POST["q2"] == "Mondstadt")
  {
    $all++;
  }
  if($_POST["q3"] == "One")
  {
    $all++;
  }
  if($_POST["q4"] == "21")
  {
    $all++;
  }
  if($_POST["q5"] == "Jinx")
  {
    $all++;
  }
  return $all;
}

function percentage($num)
{
  $per = ($num/5) * 100;
  return $per;
}

function output($x)
{
    if($_POST["$x"] == '')
    {
      return "None";
    }
    else {
      return $_POST["$x"];
    }
}

echo "<h2> Quiz Result</h2>";
echo "Question 1: Which of the characters are not from Genshin Impact?" . "<br>";
echo "You answered: " . output(q1) . "<br>";
echo "Correct answer: " . "Albedo" . "<br><br>";

echo "Question 2: Which of these is NOT a country?" . "<br>";
echo "You answered: " . output(q2) . "<br>";
echo "Correct answer: " . "Mondstadt" . "<br><br>";

echo "Question 3: Select the odd number" . "<br>";
echo "You answered: " . output(q3) . "<br>";
echo "Correct answer: " . "One" . "<br><br>";

echo "Question 4: What is the only correct response to 'What is 9+10?'?" . "<br>";
echo "You answered: " . output(q4) . "<br>";
echo "Correct answer: " . "21" . "<br><br>";

echo "Question 5: From ArcanexRiot what is Powder's alternative name?" . "<br>";
echo "You answered: " . output(q5) . "<br>";
echo "Correct answer: " . "Jinx";

echo "<h3> Score: </h3>";
echo "Total: " . total() . "/5" . "<br>";
$test = total();
echo "Percentage: " . percentage($test) . "%";
?>
