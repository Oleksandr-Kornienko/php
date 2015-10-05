<html>
    <head>
        <title>PHP </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="php.css">
    </head>
    <body>
      Код php можна зробити так щоб він звертався назад до себе, наприклад якщо користувач ввів пусті данні :<br>
 &lt;?php<br>
    if (isset($_POST['submit'])){<br>
    $Name = $_POST['Name'];<br>
    $surName = $_POST['surName'];<br>
    $message = 'Ваше імя - '.$Name.'. Ваша фамілія - '.$surName.';<br>
   if (empty($Name)&&empty($surName))<br>
       {echo 'Поле імені і фамілії не заповнене';}<br>
   else if (empty($Name)){echo 'Поле імені не заповнене';}<br>
   else if (empty($surName)){echo 'Поле фамілії не заповнене';}  <br>
    else echo $message;}<br>
    ?><br>
    Команда isset провіряє чи ініціалізована змінна submit.<br>
  <?php
        if (isset($_POST['submit'])) {
            $Name = $_POST['Name'];
            $surName = $_POST['surName'];
            $message = 'Ваше імя - ' . $Name . '. Ваша фамілія - ' . $surName . '.<br>';
            $Compare = false;
            if (empty($Name) && empty($surName)) {
                echo '<span class="SW">Поле імені і фамілії не заповнене</span>';
                $Compare = true;
            } else if (empty($Name)) {
                echo 'Поле імені не заповнене';
                $Compare = true;
            } else if (empty($surName)) {
                echo 'Поле фамілії не заповнене';
                $Compare = true;
            } else{
 $Compare = true;
            echo $message;}
        }
        else {$Compare = true;}
        if ($Compare){
            ?>
   
        <form method="POST" action="php.php">
            <label for="Name">Введіть ім'я: </label>
            <input type="text" name="Name" value="<?php
           if (!isset($Name)) $Name = '';
           else {}
            echo $Name;
            ?>"><br>
            <label for="surName">Введіть фамілію: </label>
            <input type="text" name="surName" value="<?php
            if (!isset($surName)) $surName = '';
           else {}
            echo $surName;
            ?>"><br>
            <input type="submit" name="submit">
        </form>
   <?php
        }
   ?>
    <br>
    Для вибору файлу використовують  &lt;input type="file"/>
    <form method="POST" action="php.php" enctype="multipart/form-data">
    <input type="file" name="file"/>
    <input type="submit" name="fileSubmit">
    </form>
    <?php
    if (isset($_POST['fileSubmit'])){
       $file=$_FILES['file']['name'];
        echo '<img src="'.$file.'">';
        
    }
    ?>
    </body>
</html>
