<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP use / From submit</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $name = $_POST['name'];
      $email = $_POST['email'];
      echo "<p>Thank you for your submission, $name!</p>";
      echo "<p>Your email address is $email.</p>";
    }else{
        echo "<p>Invalid form submit</p>";
        }
///=========================

    if(!empty($_GET)){
        echo "<h2>Query string parameters:<\h2>";
        echo "<ul>";
        foreach($_GET as $key => $value){
            echo "<li>$key: $value</li>";
        }
        echo "</ul>";
    }


    //================================

    if(!empty($_REQUEST)){
        echo "<h2>All Requests Received :</h2>";
        echo "<ul>";
        foreach ($_REQUEST as $key => $value){
            echo "<li>$key : $value</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>