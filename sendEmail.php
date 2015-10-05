<html>
    <head>
        <title>You are with us</title>
        <meta charset="UTF-8">
       
    </head>
    <body>
<?php
$from = 'Aleks_Mydruj';
$Theme = $_POST['theme'];
$content = $_POST['content'];
$query = "SELECT * FROM email_list";
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'testdb';
$db = mysqli_connect($host, $user, $password, $database) or die('Data base connection error.');
$rezult = mysqli_query($db, $query) or die('Query error.');
while ($row=mysqli_fetch_array($rezult)) {
$firstName = $row['first_name'];
$lastName = $row['last_name'];
$email = $row['email'];
  $message = 'Grettings '.$firstName.' '.$lastName.'!'.'<br>'.$content;
mail($email, $Theme, $message, 'From :'.$from);
echo 'Электронное письмо отправлено на '.$email.'<br>';
}

mysqli_close($db);
?>
 </body>
</html>

