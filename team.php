<?php
    define("TITLE", "Team | Company Name");
    include("includes/header.php");
?>

<div id="team-members">
<hr>

    <h1>Our Team at Company Name</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus ratione beatae excepturi inventore, doloremque architecto. Eum quasi doloremque, vel eos commodi, reprehenderit labore ex hic iusto odio voluptates. Modi, rem.</p>
    
</div>


<div class="team">

    <?php 
        foreach($teamMembers as $member) {
    ?>

        <div class="member">

            <img src="img/<?php echo $member["img"]; ?>.png" alt="<?php echo $member["name"]; ?>">
            <h2><?php echo $member["name"]; ?></h2>
            <h3><?php echo $member["position"]; ?></h3>
            <p><?php echo $member["bio"]; ?></p>

        </div> <!-- end of member -->
            
    <?php
        }
    ?>

</div>
<hr>

<?php include("includes/footer.php"); ?>