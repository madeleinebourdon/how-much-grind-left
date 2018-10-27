<?php
require_once(__DIR__.'/../config/config.php');
require_once(__DIR__ . '/../config/database.php');
require_once(__DIR__ . '/../config/functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        <?php
            if(empty($currentPageTitle)) {
                echo $siteName . ' - A Pokémon TCGO helper';
            } else {
                echo $currentPageTitle . ' - ' . $siteName;
            }
        ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> 
    <link href="assets/ico/pokeball.ico" rel="icon" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/app.min.css" />
    
    
</head>
<body>