<?php

$sql = "SELECT * FROM menu INNER JOIN menu_lang ON menu.id = menu_lang.id WHERE menu.pai = 0 AND menu.ativo = 1 AND menu_lang.lang = 'pt'";
$results = my_query($sql);

if ($results != 0) {
    ?>
                <header class="major">
                    <h2>Menu</h2>
                </header>
                <ul>
            <?php
            include('./includes/config.inc.php');
            foreach ($results as $Key => $Value) {
                $sql = "SELECT * FROM menu INNER JOIN menu_lang ON menu.id = menu_lang.id WHERE menu.pai = " . $results[$Key]['id'] . " AND menu.ativo = 1";
                $SubMeno = my_query($sql);

                if ($SubMeno != null) {
                    echo '<li><span class="opener">' . $results[$Key]['nome'] . '</span><ul>';

                    foreach ($SubMeno as $KeySub => $ValueSub) {
                        echo '<li><a href=' . $arrConfig['url_site'] . '/' . $SubMeno[$KeySub]['url'] . '>' . $SubMeno[$KeySub]['nome'] . '</a></li>';
                    }

                    echo "</li></ul>";

                } else {
                    echo '<li><a href=' . $arrConfig['url_site'] . '/' . $results[$Key]['url'] . '>' . $results[$Key]['nome'] . '</a></li>';
                }

            }

            $sql = "SELECT * FROM menu WHERE pai = 0 AND ativo = 1 AND " . ' url = "#" ';
            $lang = my_query($sql);

            
            if ($lang != 0) {
                foreach ($lang as $Key => $Value) {
                    $sql = "SELECT * FROM menu WHERE menu.pai = " . $lang[$Key]['id'] . " AND menu.ativo = 1";
                    $sublang = my_query($sql);
                    if ($sublang != null) {
                        echo '<li><span class="opener"><span class="opener"> <a href=' . $arrConfig['url_site'] . '/' . $lang[$KeySub]['url'] . '><img src="./img/28x21/' . $_SESSION['lang'] . '.png"></a></span><ul>';
        
                        foreach ($sublang as $KeySub => $ValueSub) {
                            
                            echo '<li><a href=' . $arrConfig['url_site'] . '/' . $SubMeno[$KeySub]['url'] . '><img src="./img/28x21/' . $_SESSION['lang'] . '.png"></a></li>';
                        }
        
                        echo "</li></ul>";
                    }
                }
            }
}

echo "</ul>";
    


?>

