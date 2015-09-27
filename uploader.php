<html>
<head>
    <title>Тестируем PHP</title>
</head>
<body>
<div>Upload</div>
<?
//echo 'my file - <img src="?E:\Projects\php\uploads\123.jpg" >';
//$target_path = "uploads/";
//
//$target_path = $target_path . basename( $_FILES['uploadedfile']['name']);
//
//if(//is_uploaded_file($_FILES['uploadedfile']['tmp_name'])
//    move_uploaded_file($_FILES['uploadedfile']['name'], $target_path)) {
//    echo "The file ".  basename( $_FILES['uploadedfile']['name']).
//        " has been uploaded";
//} else{
//    echo "There was an error uploading the file, please try again!";
//}

$name= $_FILES["uploadedfile"]["name"];
$type= $_FILES["uploadedfile"]["type"];
$size= $_FILES["uploadedfile"]["size"];
$temp= $_FILES["uploadedfile"]["tmp_name"];
$error= $_FILES["uploadedfile"]["error"];

switch ($_FILES['uploadedfile']['error']) {
    case UPLOAD_ERR_OK:
        break;
    case UPLOAD_ERR_NO_FILE:
        throw new RuntimeException('No file sent.');
    case UPLOAD_ERR_INI_SIZE:
    case UPLOAD_ERR_FORM_SIZE:
        throw new RuntimeException('Exceeded filesize limit.');
    default:
        throw new RuntimeException('Unknown errors.');
}

if ($error > 0)
    die("Error uploading file! code $error.");
else
{
    if($type=="image/png" || $size > 2000000)//condition for the file
    {
        die("Format  not allowed or file size too big!");
    }
    else
    {
        move_uploaded_file($temp,"uploads/".$name);
        echo '<img src="uploads/'.$name.'"><br>';
        echo 'Upload complete!<br>';


    }
}

?>
</body>
</html>