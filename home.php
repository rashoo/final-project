<?php

session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');
}

//$con = mysqli_connect('localhost','kuma5922','cst336','sessionpractical');
$con = mysqli_connect('us-cdbr-iron-east-04.cleardb.net','bcfd1d87108edf','6e549bb3','heroku_38ae91ec505f4fe');


// $cfg['Servers'][$i]['host'] = 'us-cdbr-iron-east-04.cleardb.net';
//$cfg['Servers'][$i]['user'] = 'bcfd1d87108edf';
//$cfg['Servers'][$i]['password'] = '6e549bb3';
 


mysqli_select_db($con, 'heroku_38ae91ec505f4fe');

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	 <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
</head>
<body>
<div class="container">


	<br> <h1 class="text-center text-primary"> HTML QUIZ </h1><br>
	
	<h2 class="text-center text-success"> Welcome <?php echo $_SESSION['username']; ?> </h2> <br>

<div class="col-lg-8 m-auto d-block">
	<div class="card" >


		<h3 class="text-center card-header">  Welcome <?php echo $_SESSION['username']; ?>, and good luck!  </h3>

	 </div><br>

	 <form action="check.php" method="post">

	 <?php

	 for($i=1 ; $i < 6 ; $i++){
	 $q = " select * from questions where qid = $i";
	 $query = mysqli_query($con, $q);



	 while ($rows = mysqli_fetch_array($query) ) {
	 	?>
	 	
	 	<div class="card">
	 		<h4 class="card-header"> <?php echo $rows['question']  ?>  </h4>


	 		<?php
	 			 $q = " select * from answers where ans_id = $i";
				 $query = mysqli_query($con, $q);

				 while ($rows = mysqli_fetch_array($query) ) {
				 	?>

				 	<div class="card-body">
				 		
				 		<input type="radio" name="quizcheck[<?php echo $rows['ans_id']; ?>]" value="<?php echo $rows['aid']; ?>"> 
				 		<?php echo $rows['answer']; ?>

				 	</div>

<?php
	 }
	 }
	}

	 ?>


	 <input type="submit" name="submit" value="Submit" class="btn btn-success m-auto d-block">

</form>
</div>
</div><br><br>

	<div class="m-auto d-block">
	<a href="logout.php" class="btn btn-primary "> LOGOUT </a>
	</div><br>

	<div>
		<h5 class="text-center"> </h5>
	</div><br><br>


	</div>
	





	
</div>

</body>
</html>