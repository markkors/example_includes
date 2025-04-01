<?php
$p1 = new person('John', 'Doe', 30);
$p2 = new person('John', 'Woei', 35);

$title = 'Page 1'; // Set the title for the page


?>

<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; // Include the head section with meta tags and title ?>
<body>
    
    <header>
        <?php include 'includes/nav.php'; ?>
    </header>


    <main>
       <?= $p1->get_full_name(); ?>
       <?= $p2->get_full_name(); ?>

    </main>

    <footer>
        <?php include 'includes/footer.php'; ?>
    </footer>
</body>
</html>