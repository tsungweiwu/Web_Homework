<?php
session_start();
 
 if (!isset($_SESSION['username'])) {
                                        header("Location: ../index.php");
                                        exit();
                                    }
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang=""> <!--<![endif]-->

<?php include 'head.php'; ?>

<body>
        <?php
        $page = "dashboard";
        include 'menu.php';
        include 'header.php';
        include 'right-panel.php';
        include 'footer.php';
        ?>
</body>
</html>
