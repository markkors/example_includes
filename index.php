<?php
include 'autoloader.php'; // Include the autoloader to load classes automatically
    session_start();
    $_SESSION['username'] = 'John Doe'; // Set a session variable for demonstration purposes
    
    // get the URL of the current page
    $current_page = $_SERVER['REQUEST_URI']; 


    $db = new dbcontext(); // Create a new instance of the dbcontext class
    $conn = $db->getConnection(); // Get the database connection
    $gastenboek = new gastenboek($conn); // Create a new instance of the gastenboek class
    $tools = new tools(); // Create a new instance of the tools class
    

    switch ($current_page) {
        case '/':
            require 'views/page1.php'; // Include the home page
            break;
        case '/page1':
            require 'views/page1.php'; // Include the navigation bar
            break;
        case '/page2':
            require 'views/page2.php'; // Include the navigation bar
            break;
        case '/page3':
            require 'views/page3.php'; // Include the navigation bar
            break;
        case '/page4':
            require 'views/page4.php'; // Include the navigation bar
            break;
        default:
            echo "page not found"; // Handle the case where the page is not found
    }



    
?>
