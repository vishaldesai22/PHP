
 <?php

$info=[
	        [1,"Bhushan",20000,"Artist"],
	        [2,"Mukund",30000,"Manager"],
	        [3,"Omkar",25000,"coder"],
	        [4,"Anirudha",20000,"bootstarp"],
	        [5,"Om",50000,"Hacker"]
        ];

echo "<pre>";
print_r($info);
"</pre>";

echo 
"<table><tr>


            <th> Sr-No </th>
            <th> Emp </th>
            <th> Salary </th>
            <th> Field </th>
            </tr>
            </table>"

foreach ($info as $i1) 
     {
     	echo"<tr>";
     	foreach($i1 as $i2)
     	{
     		echo"<td>$i2</td>";
     	}
     	echo"</tr>";
     	echo"<br>";
     }
     echo"</table>";
     for($row=0;$row<5;$row++)
     {
      for($col=0;$row<5;$col++)
      {
      	echo"$info[$row][$col]";
      }
      echo"<br>";

     }
     ?>
     