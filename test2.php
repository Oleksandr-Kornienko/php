<html>
    <head>
        <title> Self package </title>
        <meta charset="UTF-8">
    </head>

    <body>
      <?php
        if (isset($_POST['submit'])) {
            $Name = $_POST['Name'];
            $surName = $_POST['surName'];
            $message = 'Ваше імя - ' . $Name . '. Ваша фамілія - ' . $surName . '.<br>';
            $Compare = false;
            if (empty($Name) && empty($surName)) {
                echo 'Поле імені і фамілії не заповнене';
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
   
        <form method="POST" action="test2.php">
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
    


        
            
              
    </body>
</html>
