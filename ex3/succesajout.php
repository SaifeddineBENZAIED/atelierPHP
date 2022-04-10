<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootswatch/dist/minty/bootstrap.css">
    <title>Document</title>
</head>
<body>
    <div class="alert alert-info" role="alert">
       <p align="center"> L'ajout de <?php echo $_SESSION['nb']; ?> note(s) est terminee avec success</p>
       <?php
       usleep(10);
       header('location : index.html'); 
       ?>
      </div>
</body>
</html>