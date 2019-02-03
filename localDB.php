<html>
  <head>
     <title>Do you even shakespeak?</title>
  </head>
  <body>
<?php 

  require('common.php');
  
  $data = unserialize($_SESSION['cleanData']);
  echo var_dump($data);
  
  #$data = preg_split("/ /", $input);
  $return = array(null);
  $score = 0;
  
  foreach ($data as $x) {
	  $query = "SELECT * FROM WordForms WHERE UPPER(PlainText) = UPPER(:plaintext)";
	  $query_params = array(':plaintext' => $x);
	  try {
		$stmt = $dbc->prepare($query);
		$result = $stmt->execute($query_params);	
	  } catch(PDOException $ex) {
		die("Error 500: Query Failed @ ".$x);
      }
	  $row = $stmt->fetch();
	  
	  if ($row['PlainText']) {
		  array_push($return, $row['PlainText']);
		  $score++;
	  }
  }
  
  $problems = array_udiff($data, $return, 'strcasecmp');
  $finalScore = (((count($return)-1)/count($data))*100); 
  if ($finalScore == 0) {
	  $finalScore = 100;
  }

  $_SESSION['input'] = $input;
  $_SESSION['problems'] = $problems;
  $_SESSION['finalScore'] = $finalScore;

  
  header('Location: results.php');
  
  // if (count($problems) == 0) {
  //   echo '<h1 style="text-align: center">He hath understoodeth!</h1>';
	
  // } else {
	// echo '<h1 style="text-align: center">Your language is a pox on the past!</h1><h3 style="text-align: center">He would not have understood the following words:</h2>  <p style="text-align: center;">';
	
  // }
  // foreach ($problems as $x) {
	//   echo $x;
	//   echo '<br>';
  // }
  
  // $finalScore = (((count($return)-1)/count($data))*100)+$score-(count($problems)*100); 
  
  // echo '</p>';
  // echo '<p> Your score was: '.$finalScore.'! </p>';
  // echo '<a href="/">Try Again?</a>';
  ?>




