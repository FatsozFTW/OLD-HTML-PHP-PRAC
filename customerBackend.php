<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
function subTotal($qt, $num)
{
    return($qt * $num);
}
function checkShip()
{
    if($_POST["q9"] == 0)
    {
        return "Free 7 day";
    }
    else if($_POST["q9"] == 50)
    {
        return "Over night";
    }
    else if($_POST["q9"] == 5)
    {
        return "Three day";
    }
    else{
        return 11;
    }
}
function totalTotal($ship, $a,$b,$c,$d,$e,$f,$g,$h)
{
    return($ship+ $a+$b+$c+$d+$e+$f+$g+$h);
}

echo "<p> Welcome user: <b>" . $_POST["user"] . "</b> with the password: <b>" . $_POST["pass"] . "</b></p>";

echo "<table>";
    echo "<tr>";
        echo "<th> </th>";
        echo "<th> | </th>";
        echo "<th> Quantity </th>";
        echo "<th> | </th>";
        echo "<th> Cost Per Item </th>";
        echo "<th> | </th>";
        echo "<th> Sub Total </th>";
    echo "</tr>";
    $it1 = subTotal($_POST["q1"], 100);
    echo "<tr>";
        echo "<th> Item 1 </th>";
        echo "<th> | </th>";
        echo "<td>" . $_POST["q1"] . "</th>";
        echo "<th> | </th>";
        echo "<td> $100 </th>";
        echo "<th> | </th>";
        echo "<td> $" . $it1 . "</th>";
    echo "</tr>";
    $it2 = subTotal($_POST["q2"], 200);
    echo "<tr>";
        echo "<th> Item 2 </th>";
        echo "<th> | </th>";
        echo "<td>" . $_POST["q2"] . "</th>";
        echo "<th> | </th>";
        echo "<td> $200 </th>";
        echo "<th> | </th>";
        echo "<td> $" . $it2 . "</th>";
    echo "</tr>";
    $it3 = subTotal($_POST["q3"], 35);
    echo "<tr>";
        echo "<th> Item 3 </th>";
        echo "<th> | </th>";
        echo "<td>" . $_POST["q3"] . "</th>";
        echo "<th> | </th>";
        echo "<td> $35 </th>";
        echo "<th> | </th>";
        echo "<td> $" . $it3 . "</th>";
    echo "</tr>";
    $it4 = subTotal($_POST["q4"], 30);
    echo "<tr>";
        echo "<th> Item 4 </th>";
        echo "<th> | </th>";
        echo "<td>" . $_POST["q4"] . "</th>";
        echo "<th> | </th>";
        echo "<td> $30 </th>";
        echo "<th> | </th>";
        echo "<td> $" . $it4 . "</th>";
    echo "</tr>";
    $it5 = subTotal($_POST["q5"], 38);
    echo "<tr>";
        echo "<th> Item 5 </th>";
        echo "<th> | </th>";
        echo "<td>" . $_POST["q5"] . "</th>";
        echo "<th> | </th>";
        echo "<td> $38 </th>";
        echo "<th> | </th>";
        echo "<td> $" . $it5 . "</th>";
    echo "</tr>";
    $it6 = subTotal($_POST["q6"], 40);
    echo "<tr>";
        echo "<th> Item 6 </th>";
        echo "<th> | </th>";
        echo "<td>" . $_POST["q6"] . "</th>";
        echo "<th> | </th>";
        echo "<td> $40 </th>";
        echo "<th> | </th>";
        echo "<td> $" . $it6 . "</th>";
    echo "</tr>";
    $it7 = subTotal($_POST["q7"], 45);
    echo "<tr>";
        echo "<th> Item 7 </th>";
        echo "<th> | </th>";
        echo "<td>" . $_POST["q7"] . "</th>";
        echo "<th> | </th>";
        echo "<td> $45 </th>";
        echo "<th> | </th>";
        echo "<td> $" . $it7 . "</th>";
    echo "</tr>";
    $it8 = subTotal($_POST["q8"], 20);
    echo "<tr>";
        echo "<th> Item 8 </th>";
        echo "<th> | </th>";
        echo "<td>" . $_POST["q8"] . "</th>";
        echo "<th> | </th>";
        echo "<td> $20 </th>";
        echo "<th> | </th>";
        echo "<td> $" . $it8 . "</th>";
    echo "</tr>";
    echo "<tr>";
        echo "<th> Shipping </th>";
        echo "<th> | </th>";
        echo "<td>" . checkShip() . "</td>";
        echo "<th> | </th>";
        echo "<td> $" . $_POST["q9"] . "</td>";
        echo "<th> | </th>";
        echo "<td> $" . $_POST["q9"] . "</td>";
    echo "</tr>";
    echo "<tr>";
        echo "<th> <th> <th> Total Cost </th></th> </th>";
        echo "<td> </td>";
        echo "<td> </td>";
        echo "<td> </td>";
        echo "<td> $" . totalTotal($_POST["q9"],$it1 ,$it2 ,$it3 ,$it4 ,$it5 ,$it6 ,$it7 ,$it8 ) . "</td>";
    echo "</tr>";
echo "</table>";

?>