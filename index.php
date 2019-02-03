<?php
	require('common.php');
	
?>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="shakespeak.css">
		<link rel="shortcut icon" type="image/png" href="/willy-shakes.png"/>
		<link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave+Display" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	
	<title>Shakespeak Translator</title>
	
	</head>

	<body>
		<div class="container mt-5">
			<div class="row">
				<div class="p-4 col-lg-6 col-sm-12">
					<h1 class="graffiti-font">Explain Sh*t to Shakespeare</h1><br>
					<p class="body-font">Canst thou explain a modern idea using only the word bank known to the Bard? I beg of thee to try thine hand at this difficult task.</p>
				</div>
				<div class="p-4 col-lg-6 col-sm-12">
					<form action='submit.php'>
						<textarea class="form-control placeholder-nice" type="text" name="input" style="height: 230px; background-color: #f6f6f6" placeholder="Test thine finest Shakespeak here..."><?php
							if ($_SESSION['raw']) {
								echo $_SESSION['raw'];
							}
							session_destroy();
							?></textarea>
						<button type="submit" class="btn btn-primary custom-button mt-4 body-font right-align">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
