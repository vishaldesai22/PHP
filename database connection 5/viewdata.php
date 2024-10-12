<?php
$conn = mysqli_connect("localhost", "root", "", "testdb");
 // Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 // Attempt select query execution
$sql = "SELECT * FROM student";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border=2px solid  style=color:green;>";
            echo "<tr>";
                echo "<th>roll_no</th>";
                echo "<th>name</th>";
                echo "<th>address</th>";
                 echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr >";
                echo "<td>" . $row['roll_no'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 // Close connection
mysqli_close($conn);
?>