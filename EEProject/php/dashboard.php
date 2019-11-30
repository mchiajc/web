<!DOCTYPE html>
<html>
<head>
	<title>dashboard</title>

	<script src="jquery-3.4.1.js"  >  </script>

	<script>
		$(document).ready(function(){
			$("#btn").click(function(){
				$("#test").load("./php/data.txt");
			});
		});
	</script>
</head>
<body>

         <?php

            $msg = '';
            				
               if ($_POST['uname'] == 'EEEProject' && $_POST['psw'] == 'team1') {
                                    
		echo "Welcome to dashboard. Here's your data:";				
		

	}




		else {
                  $msg = 'Wrong username or password';



               }
            
         ?>


</body>
</html>
