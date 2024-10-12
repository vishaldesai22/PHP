<?php
  $conn = mysqli_connect("localhost", "root", "", "testdb");
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
   echo "<h2 style=color:Blue;text-size:20px>Before update operation performed:</h2>";
$sql = "SELECT * FROM student";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border=3px solid;>";
            echo "<tr>";
                echo "<th>roll_no</th>";
                echo "<th>name</th>";
                echo "<th>address</th>";
                 echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
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

   $sql = 'UPDATE student SET address= "Mumbai" WHERE name="Madhuri Patil"';

     $retval = mysqli_query($conn,$sql);
   
   if(! $retval ) {
      die('Could not update data: ' . mysqli_error());
   }
   
   echo "<b style=color:red;>Updated data successfully!!</b>\n";
   echo "<h2 style=color:Blue;text-size:20px>After update operation performed</h2>";
   $sql = "SELECT * FROM student";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>roll_no</th>";
                echo "<th>name</th>";
                echo "<th>address</th>";
                 echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
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
   mysqli_close($conn);
?>