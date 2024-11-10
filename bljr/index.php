<?php include 'inc/header.php'; ?>
<?php include 'inc/menu.php'; ?>

<section>
    <?php
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    switch ($page) {
        case 'about':
            include 'pages/about.php';
            break;
        case 'contact':
            include 'pages/contact.php';
            break;
        case 'table':
            include 'pages/table.php';
            break;
        default:
            include 'pages/home.php';
    }
    ?>
</section>

<?php include 'inc/footer.php'; ?>