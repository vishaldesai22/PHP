<?php
include('connection.php');
if(isset($_POST['insert']))
{	 
	 $roll = $_POST['roll_no'];
	 $name = $_POST['name'];
	 $address = $_POST['address'];
	 
	 $sql = "INSERT INTO STUDENT (roll_no,name,address) VALUES ('$roll','$name','$address')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	 }
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
}

if(isset($_POST['view']))
{
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
}

if(isset($_POST['update']))
{
	$roll = $_POST['roll_no'];
	 $name = $_POST['name'];
	 $address = $_POST['address'];
	$sql = "UPDATE student SET roll_no='$roll',name='$name',address='$address' WHERE roll_no='$roll'";

     $retval = mysqli_query($conn,$sql );
   
   if(! $retval ) {
      die('Could not update data: ' . mysqli_error());
   }
   echo "Updated data successfully\n";
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
}

if(isset($_POST['delete']))
{
	$roll = $_POST['roll_no'];
	 $name = $_POST['name'];
	 $address = $_POST['address'];
	 $sql = "DELETE from student  WHERE roll_no='$roll'";

     $retval = mysqli_query($conn,$sql );
   
   if(! $retval ) {
      die('Could not update data: ' . mysqli_error());
   }
   echo "Deleteded data successfully\n";
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
}

?>