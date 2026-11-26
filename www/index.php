<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

    if (isset($_GET['page'])) {
        $page = $_GET['page'];

        if ($page == 'home') { ?>  <h1>Welcome to the home page</h1>  <?php }
        if ($page == 'contact') { ?>  <form action=""><input type="text" placeholder="write a msg"></form>  <?php }
        if ($page == 'faq') { ?>  <h1>FACK YOU YOU IDIOT</h1>  <?php }
        if ($page == 'about') { ?>  <h1>welcome to our company you fucking lazy</h1>  <?php }

    }

?>    

    
</body>
</html>