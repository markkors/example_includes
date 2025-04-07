<?php
//$p1 = new person('John', 'Doe', 30);
//$p2 = new person('John', 'Woei', 35);

$title = 'Page 1'; // Set the title for the page

$entries = $gastenboek->getEntries(); // Get the entries from the gastenboek class
$table = $tools::tableBuilder($entries);

?>

<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; // Include the head section with meta tags and title ?>
<body>
    
    <header>
        <?php include 'includes/nav.php'; ?>
    </header>


    <main>
        <div class="table_container"><?=$table;?></div>
    </main>

    <footer>
        <?php include 'includes/footer.php'; ?>
    </footer>
</body>
</html>