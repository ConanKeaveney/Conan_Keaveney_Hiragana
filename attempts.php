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
$q = ($_GET['q']);


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//mysqli_select_db($conn,"mydb");
//echo "$p";
$update1="UPDATE tables SET att = att+1 WHERE chname='".$q."'";
$update2="UPDATE tables SET perc = =(cor/att)*100 WHERE chname='".$q."'";
mysql_query($update1, $conn);
//mysql_query($update2, $conn);
//$sql="SELECT * FROM tables WHERE id = '1'";


/*echo "<table>
<tr>
<th>chname</th>
<th>attempts</th>
<th>accuracy</th>

</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['chname'] . "</td>";
    echo "<td>" . $row['att'] . "</td>";
    echo "<td>" . $row['acc'] . "</td>";
    
    echo "</tr>";
}*/

    

mysqli_close($conn);
?>
</body>
</html>