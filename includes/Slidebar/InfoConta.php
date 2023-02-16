<?php
 @session_start();
 include('includes/config.inc.php');
?>

<section>
    <header class="major">
        <h2>Informações -> Conta(<?php echo $_SESSION['username']; ?>)</h2>
    </header>
    <a href="#" class="image"><img src="images/pic09.jpg" alt="" /></a>
    <p> Olá <?php echo $_SESSION['username']; ?></p>
    <ul class="contact">
        <li class="icon solid fa-envelope"><a href="#"><?php echo $_SESSION['email']; ?></a></li>
        <li class="icon solid fa-phone"><?php echo $_SESSION['number']; ?></li>
        <input type="button" value="Defenições da Conta" onclick="<?php echo $arrConfig['dir_site'];?>">
    </ul>
</section>