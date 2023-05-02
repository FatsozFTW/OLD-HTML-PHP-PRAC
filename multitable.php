<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
function mult($x, $y)
{
  if($x == 0)
  {
    return($y);
  }
  if($y == 0)
  {
    return($x);
  }
  else {
      return($x*$y);
  }

}
function OtoH()
{
  for($i = 0; $i<=100; $i++)
  {
    echo"<tr>";
    for($j = 0; $j<=100; $j++)
    {
      echo "<td>" . mult($i, $j). "</td>";
    }
    echo "</tr>";
  }
}

echo"<h2>Exercise 1: Multiplication Table </h2>";
echo "<table>";
  echo "<tr>";
    echo OtoH();
  echo "</tr>";
echo "</table>";
?>
