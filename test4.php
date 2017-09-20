<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','mydb');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM tables";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>chname</th>
<th>Percentage</th>
<th>Attempts</th>
<th>correct</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['chname'] . "</td>";
    echo "<td>" . $row['perc'] . "</td>";
    echo "<td>" . $row['att'] . "</td>";
    echo "<td>" . $row['cor'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>