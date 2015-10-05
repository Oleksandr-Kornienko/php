<form method="POST" action="deleteEmails.php">
<?php
$host = 'localhost';
$user='root';
$password='';
$db='testdb';
$database = mysqli_connect($host, $user, $password, $db) or die('Data base connection error');
$sql="SELECT * FROM email_list";
$rezult=mysqli_query($database, $sql);
echo 'Which row I must to delete?<br>';
while ($row = mysqli_fetch_array($rezult)) {
    $Name = $row['first_name'];
    $surName = $row['last_name'];
    $Email = $row['email'];
     $fullName = $Name.' '.$surName.' - '.$Email.'.<br>';
     echo '<input type="checkbox" name ="deleteList"> ';
     echo '<label for="deleteList">'.$fullName.'</label> <br>';
}
mysqli_close($database);

 
?>
<input type="submit" name="submit" value="delete">
</form>
<?php
if (isset($_POST['submit'])){
    foreach ($_POST['deleteList'] as $value) {
    $query = "DELETE FROM email_list WHERE id=$value";
    mysqli_query($database, $query);
    echo 'Customer was deleted.';
}

    
}
?>