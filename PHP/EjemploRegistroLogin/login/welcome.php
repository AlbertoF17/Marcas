<?php
    session_start();
?>

<?php if(isset($_SESSION["usuario"])): ?>
    <h1><?= $_SESSION['usuario']['username']?></h1>
<?php else: ?>
    <h1><?= "NO ESTAS LOGUEADO"?></h1>
<?php endif;?>
<a href="logout.php">Logout</a>