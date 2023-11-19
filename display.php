<?php

include('connection.php');
$sql = "select * from students";
$result = mysqli_query($conn, $sql);

print "<p><h1> Records from students table </h1></p>";
?>

<table Border="4">
<tr><th>Adm number</th> <th>Student Name</th> <th>Gender</th> <th>Course</th> <th>Year of admission</th>


<?php
if(mysqli_num_rows($result)>0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        echo "<tr><td>" .$row["AdmNo"]. "</td><th>".$row["SName"]. "</td> <td> " .$row["Gender"]. "</td><td>".$row["Course"]. "</td><td>".$row["Year"]."</td>";
    }
}
else
{
    echo "No results";
}
mysqli_close($conn);
?>
