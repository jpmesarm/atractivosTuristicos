<?php
include("header.php");
include("../controller/library_controller.php");
?>

<section>
    <?php
    $controller = new LibraryController();
    $controller->ReturnPageController();
    ?>
</section>

<?php
include("footer.php");
?>
			
