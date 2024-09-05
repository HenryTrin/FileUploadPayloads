<!DOCTYPE html>
<html>
<body>

<?php
//PHP, MYSQL, CLOSED SHELL by Henry T - NETSPI U 2024
//Fill in creds
//MYSQL has a default root user with no password upon creation
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hackazon";  

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//Change query here
$sql = "Select * From tbl_users"; //This query is useful to check all comlumns and other data. 
$result = mysqli_query($conn, $sql); // First parameter is just return of "mysqli_connect()" function
echo "<br>";a
echo "<table border='1'>";
while ($row = mysqli_fetch_assoc($result)) { // Important line !!!
    echo "<tr>";
    foreach ($row as $field => $value) { // If you want you can right this line like this: foreach($row as $value) {
        echo "<td>" . $value . "</td>"; 
    }
    echo "</tr>";
}
echo "</table>";
$conn->close();
?>

</body>
</html>