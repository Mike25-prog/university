<?php

include('connection.php');

//tables fields
$Adm = $_POST['AdmNo'];
$Sname = $_POST['SName'];
$Gender = $_POST['Gender'];
$Course = $_POST['Course'];
$Year = $_POST['Year'];

//Use sql queries to add record
$sql = "insert into students values ('$Adm','$Sname','$Gender','$Course','$Year')";

//checking if data is being added
if($conn->query($sql))
{
    echo '<script>alert("record added successfully")</script>';
}
else
{
    echo "Error:" .$sql. " " .$conn->error;
}
    mysqli_close($conn);

?>