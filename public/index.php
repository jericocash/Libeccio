
<?php

$page = isset ($_GET["page"]) ? $_GET["page"] : 'homepage'; 
?>

<?php 

include '../inc/init.php';
?>



<?php 

include ROOT_PATH . 'public/tamplate-parts/header.php';
?>

<?php include  ROOT_PATH .'public/pages/' . $page . '.php'  ?>

<?php 

include ROOT_PATH . 'public/tamplate-parts/footer.php';
?>

 