<html>
  <head>
        <title> Aliens attack form </title>
        <meta charset="UTF-8">
    </head>
  <body>
   <?php
   
   
   $firstName=$_POST['firstName'];
 $lastName=$_POST['lastName'];
   $whenHappened=$_POST['whenHappened'];
   $howMany=$_POST['howMany'];
   $email=$_POST['email'];
   $messeage='Your first name is - '.$firstName.'<br>'.'Your last name is - '.$lastName.'<br>'.
           'It happened - '.$whenHappened.'<br>'.'They were - '.$howMany.'<br>'.'Your email - '.$email.'<br>';
   
echo 'We applied your messeage!<br>';
echo $messeage;
$host = 'localhost';
$user = 'root';
$password = '';
$database='testdb';
  $db=mysqli_connect($host, $user, $password, $database) or die('Data base connection error.');
  echo 'Connection to data base is successful!<br>';
  $query="INSERT INTO aliens (firstName, lastName, whenHappened, howMany, email) VALUES"
           . " ('$firstName', '$lastName', '$whenHappened', '$howMany', '$email')";
  $rezult = mysqli_query($db, $query) or die('Query error.');
  
  echo 'Your datas were transported to data base.<br>';
  $query2 = "SELECT * FROM aliens";
  $rezult2 = mysqli_query($db, $query2) or die('Query error.');
  echo $rezult2;
  mysqli_close($db);
?>
  </body>
</html>

