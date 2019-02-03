<?php 
  require('common.php');

  $input = $_GET["input"];

  $_SESSION['raw'] = $input;
  
  echo "Accepted Input: ".$input ."\n";
  
  $pattern1 = '/(?![a-zA-Z\-\' ])./s';
  $replacement1 = '';
  
  $output1 = preg_replace($pattern1, $replacement1, $input);
  
  $pattern2 = '/( )/s';
  $replacement2 = ' ';
  
  $output2 = preg_replace($pattern2, $replacement2, $output1);
  
  echo "Adjusted Input: ".$output2." \n";
  
  $_SESSION['textGCP'] = $output2;
  echo "SESSION: ".$_SESSION['textGCP'];
  
  header('Location: googleapi/setENV.php');
  
