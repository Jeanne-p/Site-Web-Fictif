<!DOCTYPE html>

<head>
<title>Connectons Ensemble</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

</head>



<body>
<?php include("contenu/menu.php"); ?>

<?php
						
						
						if(empty($_GET['page']))
						{
							include('pages/principal.php');
						} 	
						else 						 {																
							$page = $_GET['page'];
							include("contenu/$page.php");
						} 


						
					?>

<?php include("contenu/footer.html"); ?>
</body>
</html>