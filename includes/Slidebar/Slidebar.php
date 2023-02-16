<?php
 @session_start();
include('includes/config.inc.php');
?>
<!-- Search -->
<section id="search" class="alt">
    <form method="post" action="#">
        <input type="text" name="query" id="query" placeholder="Search" />
    </form>
</section>

<!-- Menu -->
<nav id="menu">
<?php
include($arrConfig['dir_site'].'/includes/Slidebar/menu.inc.php');
?>
</nav>


<!-- Section -->
<section>
    <header class="major">
        <h2>Notícias</h2>
    </header>
    <div class="mini-posts">
        <article>
            <a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
        </article>
        <article>
            <a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>
            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
        </article>
        <article>
            <a href="#" class="image"><img src="images/pic09.jpg" alt="" /></a>
            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
        </article>
    </div>
    <ul class="actions">
        <li><a href="#" class="button">More</a></li>
    </ul>
</section>

<!-- Section -->
<?php
   
    if(isset($_SESSION['username']))
    {
        include($arrConfig['dir_site'].'/includes/Slidebar/conta.inc.php');
    }
?>

<!-- Section -->


