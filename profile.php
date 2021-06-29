<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="s.css">
    <title>
    <?php
       echo $_SESSION["useruid"];
    ?>
    </title>
</head>
<body>
    <div class="profile">
        <div>
            <div class="main">
                <img src="images/cover.jpg" alt="">
            </div>
            <div class="imgprof">
                <img src="images/prof.jpg" alt="">
            </div>
        </div>
        <button name="edit">Edit profile</button>
        <pre>
        </pre>
    </div>
</body>
</html>