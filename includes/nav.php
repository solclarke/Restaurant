<ul>
    <?php 
    
        foreach ($navItems as $item) {
            echo "<li><a href=\"$item[fileName]\">$item[title]</a></li>";
        };
    ?>
</ul>