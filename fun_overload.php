<?php 
class shape {
      
    // __call is magic function which accepts 
    // function name and arguments
    function __call($name_of_function, $arguments) {
              
        // It will match the function name
        if($name_of_function == 'area') {
              
            switch (count($arguments)) {
                      
                // If there is only one argument
                // area of circle
                case 1:
                    return 3.14 * $arguments[0];
                          
                // IF two arguments then area is rectangel;
                case 2:
                    return $arguments[0]*$arguments[1];
					
				default:
					echo "Too much arguments";
            }
        }
		else
		{
			echo "<br>method does not exist";
		}
    }
}
      
// Declaring a shape type object
$s = new Shape;
      
// Function call 
echo "Area of circle : ".($s->area(2));
echo "\n";
      
// calling area method for rectangel
echo "<br>Area of rectangle: ".($s->area(4, 2));

$s->add(2);
?>
