<?php
    $title = 'Page 2 - add message'; // Set the title for the page

    $message = ''; // Initialize the message variable
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $message = htmlspecialchars($_POST['message']); // Get the message from the form submission
        // Here you can add code to save the message to a database or perform other actions
        $username = $_SESSION['username']; // Get the username from the session
        $gastenboek->insertEntry($username, $message); // Insert the message into the database
        header('Location: /'); // Redirect to the home page after submission
    }

?>




<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; // Include the head section with meta tags and title ?>
<body>
    <header>
        <?php include 'includes/nav.php'; ?>
    </header>


    <main>
        <h1>Add Message</h1>
        <form method="post">
            <label for="message">Message:</label><br>
            <input type="text" id="message" name="message"><br><br>
            <input type="submit" value="Submit">
        </form>
    </main>

    <footer>
        <?php include 'includes/footer.php'; ?>
    </footer>
</body>
</html>