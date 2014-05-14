<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>MitBackBenchers</title>
    
	<link rel="stylesheet" type="text/css" href="../Style/Style.css" />
	<script type="text/javascript" src="../Js/jquery.js"></script>
	
	<script type="text/javascript">
	$(document).ready(function(){
		
			$("#ChatText").keyup(function(e){
				// when we press enter do
				if (e.keyCode ==13) {

					var ChatText = $("#ChatText").val();
					$.ajax({
						type:'POST',
						url:'InsertMessage.php',
						data:{ChatText:ChatText},
						success:function(){
							$("#ChatMessages").load("DisplayMessages.php");
							$("#ChatText").val("");
						}
					});
				}
			});

			setInterval(function(){//Refresh Every 1500ms
				$("#ChatMessages").load("DisplayMessages.php");
			},1500);

			$("#ChatMessages").load("DisplayMessages.php");

	});


	
	</script>
</head>
<body>
	<h2>Welcome <span style="color:green"> <?php echo $_SESSION['UserName'];?></span><a href="Logout.php" class="right">
Logout</a></h2>
	</br></br>
	
	<div id="ChatBig">
		<div id="ChatMessages">
		</div>
	</div>
	<br/>
	<p align="center">Type the message & Press Enter.</p>
	<textarea id="ChatText" name="ChatText"></textarea>
	
	
	</body>


</html>