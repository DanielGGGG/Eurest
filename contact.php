<?php
include 'index.view.php';

if (empty($_POST) == false) {
    $errors = array();

    $name       = $_POST['name'];
    $email      = $_POST['email'];
    $subject    = $_POST['subject'];
    $message    = $_POST['message'];

    // Check if form is filled out
    if (empty($name) == true || empty($email) === true || empty($subject) === true || empty($message) === true)
    {
        // Error message if one or more of the required fields are empty
        $errors[] = 'Naam, Email, Onderwerp en bericht is vereist';
    }
    else
    {
        // Validation to check if name consists of letters
        if(ctype_alpha($name) == false)
        {
            // Error message if the name is invalid
            $errors [] = 'Naam kan alleen letters bevatten.';
        }
        // Check if the e-mailaddress is valid
        if(filter_var($email, FILTER_VALIDATE_EMAIL) == false)
        {
            // Error message if e-mailaddress is invalid
            $errors [] = 'U heeft geen geldig e-mailadres ingevoerd.';
        }
    }
    // E-mail sending process if no errors are displayed
    if (empty($errors) == true)
    {
        //send email
        mail('Eurest e-mail', "$subject","$message", 'From: ' . $email);
        header('location: contact.php?sent');
        exit();
        //redirect user
    }

}
?>
<!doctype html>
<html>
<style>
    input[type=text], select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
    }

    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
</style>
<div class="container-fluid text-center bodyunder">
    <div class="row content">
        <div class="col-sm-2 sidenav">
            <p><a href=""></a></p>
        </div>
        <div class="col-sm-8 text-left">

            <?php
            // If e-mail is sent successfully, show message
            if(isset($_GET['sent']) == true)
            {
                echo '<p>Bedankt voor uw bericht. Wij nemen zo snel mogelijk contact met u op!</p>';
            // If e-mail isn't sent successfully, show errors
            } else
            {
            if (empty($errors) == false)
            {
                echo '<ul>';
                foreach ($errors as $error)
                {
                    echo '<li>', $error, '</li>';
                }
                echo '</ul>';
            }
            ?>
            <div id="contactForm">
                <form action="" method="post">
                    <p>
                        <!-- Input field for name with validation -->
                        <label for="name">Naam:</label><br>
                        <input type="text" name="name" id="name" value="<?php if (isset($_POST['name']) == true) { echo strip_tags($_POST['name']); } ?>">
                    </p>
                    <p>
                        <!-- Input field for email with validation -->
                        <label for="email">Email:</label><br>
                        <input type="text" name="email" id="email" value="<?php if (isset($_POST['email']) == true) { echo strip_tags($_POST['email']); } ?>">
                    </p>
                    <p>
                        <!-- Input field for subject with validation -->
                        <label for="subject">Onderwerp</label><br>
                        <input type="text" name="subject" id="subject" value="<?php if (isset($_POST['subject']) == true) { echo strip_tags($_POST['subject']); } ?>">
                    </p>
                    <p>
                        <!-- Text area for message with validation -->
                        <label for="message">Bericht:</label><br>
                        <textarea name="message" id="message" rows="10" cols="20" style="resize:vertical"><?php if (isset($_POST['message']) == true) { echo strip_tags($_POST['message']); } ?></textarea>
                    </p>
                    <p>
                        <!-- Submit button -->
                        <label for="submit"></label>
                        <input type="submit" name="send" id="send" value="Verzend">
                    </p>
                </form>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
</html>