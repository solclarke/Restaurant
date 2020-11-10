<?php 
    define("TITLE", " Menu | Company Name");
    include("includes/header.php");

    function strip_bad_characters($input) { // Stops someone attacking your site by inputing malicous data into the URL
        $output = preg_replace("/[^a-zA-Z0.9_-]/", "", $input);
        return $output;
    }

    if (isset($_GET["item"])) {
        $menuItem = strip_bad_characters($_GET["item"]);
        $dish = $menuItems[$menuItem];
    }
?>

<hr>

<div id="dish">
    <h1> <?php echo $dish["title"]; ?> <span class="price"><sup>£</sup><?php echo $dish["price"]; ?></span> </h1>
    <p> <?php echo $dish["blurb"]; ?> </p>

    <br>

    <p><strong>Suggested Beverage: </strong><?php echo $dish["drink"]; ?></p>
</div> <!-- end of dish -->

<a href="menu.php" class="button">&laquo; Back to Menu</a>

<hr>

<?php include("includes/footer.php"); ?>