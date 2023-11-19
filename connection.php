<?php

$server = "localhost";
$user = "root";
$pwd = "";
$DBMS = "university";

//Create a conn to a database
$conn = mysqli_connect($server,$user,$pwd,$DBMS);

//checking if the conn is established
if($conn)
{
   echo "connection is established successfully";
}
else{
    echo "connection failed to establish";
}

?>