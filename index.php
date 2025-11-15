<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            date_default_timezone_set("Asia/Amman");
           $hour = (Date("H"));
           if ($hour >= 5 && $hour < 11)
               echo "<h2>Good morning</h2>" ;
           else if ($hour >= 11 && $hour < 17)
                  echo "<h2> Good afternoon </h2> "; 
           else if ($hour >= 17 && $hour < 21)
                  echo "<h2> Good evening </h2> ";
           else
                 echo " <h2> Good night </h2> "; 
                
           echo "<h3>Today's date: " . date ('d-m-y') ."</h3>";
           echo "<h3>Current time: " . date ('H:i:s'). "</h3>";
        ?>
    </body>
</html>