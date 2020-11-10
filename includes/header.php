<?php 
    include("includes/arrays.php");
    $company_name = " Company Name"; // for the copyright
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

        <header id="banner">
            <a href="index.php" title="Return to Home">
                <img src="img/banner2.png" alt="Company Name">
            </a>
        </header> <!-- end of banner -->

        

        <nav id="navbar">
            <?php include("includes/nav.php"); ?>
        </nav>

        <div class="content">