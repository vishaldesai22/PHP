<html>
<body>

 
	
	<?php 
	if(isset($_POST["submit"]))
    {
        // Check if any option is selected
        if(isset($_POST["subject"]))
        {
            // Retrieving each selected option
            foreach ($_POST['subject'] as $subject)
                print "You selected $subject<br/>";
        }
    else
        echo "Select an option first !!";
    } ?>
		
</body>
</html>