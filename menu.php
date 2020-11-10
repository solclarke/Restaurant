<?php 
    define("TITLE", "Menu | Company Name");
    include("includes/header.php");
?>

<div id="menu-items">

<hr>

    <h1>Our Delicious Menu</h1>
    <p>Vitae purus faucibus ornare suspendisse sed nisi lacus sed!</p>
    <p><em>Click any menu item to learn more about it.</em></p>

    <ul>
        <?php foreach ($menuItems as $dish => $item) { ?>
            <li><a href="dish.php?item=<?php echo $dish; ?>"><?php echo $item["title"]; ?></a> <sup>£</sup><?php echo $item["price"]; ?></li>
        
    
    <?php } ?>
    </ul>

    <hr>

</div> <!-- end of menu items -->

<?php include("includes/footer.php"); ?>