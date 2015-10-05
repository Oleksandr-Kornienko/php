<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$Email = $_POST['Email'];
$messeage = $firstName.' <br>'.$lastName.'<br>'.$Email.'.';
echo "Yout message : ".'<br>'.$messeage.'<br>';
$host = 'localhost';
$user = 'root';
$password = '';
$database='testdb';
$db = mysqli_connect($host, $user, $password, $database)or die('Data base connection error.');
  echo 'Connection to data base is successful!<br>';
  $query="INSERT INTO email_list (first_name, last_name,  email) VALUES"
           . " ('$firstName', '$lastName', '$Email')";  
   echo $query.'<br>';
  $rezult = mysqli_query($db, $query) or die('Query error.');
  mysqli_close($db);
  echo 'Your datas were transported to data base.<br>';
?>

