<?php
if(isset($_POST['calculate']))
{
    $basic=$_POST['basic'];

    $hra=$basic*0.20;
    $da=$basic*0.10;

    $gross=$basic+$hra+$da;

    echo "<table border='1'>
            <tr>
                <th>Basic</th>
                <th>HRA</th>
                <th>DA</th>
                <th>Gross Salary</th>
            </tr>
            <tr>
                <td>$basic</td>
                <td>$hra</td>
                <td>$da</td>
                <td>$gross</td>
            </tr>
          </table>";
}
?>

<form method="post">
    Basic Salary:
    <input type="number" name="basic">
    <input type="submit" name="calculate" value="Calculate">
</form>
