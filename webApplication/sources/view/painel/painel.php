<?php
session_start();
include('../../../index.php')
?>
<h2>Olá, <?php echo $_SESSION['user'];?></h2>
<h2><a href="../../logout.php">sair</a></h2>