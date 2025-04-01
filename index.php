<?php
include 'autoloader.php'; // Include the autoloader to load classes automatically
    session_start();
    $_SESSION['username'] = 'JohnDoe'; // Set a session variable for demonstration purposes
    
    // get the URL of the current page
    $current_page = $_SERVER['REQUEST_URI']; 

    switch ($current_page) {
        case '/page1':
            require 'views/page1.php'; // Include the navigation bar
            break;
        case '/page2':
            require 'views/page2.php'; // Include the navigation bar
            break;
        default:
            echo "page not found"; // Handle the case where the page is not found
    }



    
?>
