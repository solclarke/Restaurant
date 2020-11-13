
<?php 
define("TITLE", "Contact | Company Name");
include("includes/header.php");
?>

<div id="contact">

    <hr>
    <h1>Get in touch with us!</h1>

    <?php

        // Check for header injections
        function has_header_injection($string) {
            return preg_match("/[\r\n]/", $string);
        }

        // If the submit button is pressed
        if(isset ($_POST["contact_submit"])) {

            // The form's name value saved to a corresponding variable
            $name = trim($_POST["name"]); 
            $email = trim($_POST["email"]);
            $msg = $_POST["message"];

            // Check to see if $name or $email has header injections
            if (has_header_injection($name) || has_header_injection($email)) {
                die(); // Kills the script
            }

            // Check if name, email or message aren't filled in / are empty
            if (!$name || !$email || !$msg) {
                echo "<h3 class='error'>All fields required.</h3><a href='contact.php' class='button'>Go back and try again</a>";
                exit;
            } 

            //

            // Add the recipient email to a variable
            $to = "email@email.com";

            // Create a subject
            $subject = "$name sent you a message via your contact form";

            // Construct the message
            $message    = "Name: $name\r\n";
            $message   .= "Email: $email\r\n";
            $message   .= "Message: \r\n$msg";

            // Create a line-break of the message at 72 characters
            $message    = wordwrap($message, 72);

            // Set the mail headers into a variable
            $headers = "Content-type: text/plain; charset=iso-8859-1\r\n";

            // Send the mail
            mail($to, $subject, $message, $headers);

    ?>

    <!-- Show success message after sending email -->
    <h4>Thanks for contacting Company Name!</h4>
    <p>Please allow 24 hours for a response</p>
    <p><a href="index.php" class="button">&laquo; Go to Home Page</a></p>

    <?php 
        } else { // If now submit button was pressed, just show the form
    ?>

    <form action="contact.php" method="post" id="contact-form">

        <label for="name">Your Name:</label>
        <input type="text" name="name" id="name">
        
        <label for="email">Your Email:</label>
        <input type="email" name="email" id="email">

        <label for="message">Your Message:</label>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
    
        <br>

        <input type="submit" value="Send Message" class="button next" name="contact_submit">
    </form>

    <?php 
        } 
    ?>

    <hr>

</div> <!-- end of contact -->


<?php include("includes/footer.php"); ?>