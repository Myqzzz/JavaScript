<?php
require_once "mysql.php";
$q = $_GET["q"];
if(empty($q))
{
    echo  "Not selected.";
    exit;
}
$con = new Mysql();
$sql="select *from customers where CustomerID = '$q'";
$result = $con->sql($sql);
echo "<table border='1' style='color: rebeccapurple'>
<tr>
<th>CustomerID</th>
<th>CompanyName</th>
<th>ContactName</th>
<th>Address</th>
<th>City</th>
<th>PostalCode</th>
<th>Country</th>
</tr>";
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['CustomerID'] . "</td>";
    echo "<td>" . $row['CompanyName'] . "</td>";
    echo "<td>" . $row['ContactName'] . "</td>";
    echo "<td>" . $row['Address'] . "</td>";
    echo "<td>" . $row['City'] . "</td>";
    echo "<td>" . $row['PostalCode'] . "</td>";
    echo "<td>" . $row['Country'] . "</td>";
    echo "</tr>";
}
$con->close();

