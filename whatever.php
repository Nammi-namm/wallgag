<?php
    $pageTitles = array(
        "" => "Fresh",
        "index.php" => "Fresh",
        "popular.php" => "Popular",
        "random.php" => "Random"
    );
    $url = $_SERVER['REQUEST_URI'];
    $url = split('/', $url);
    $url = $url[count($url)-1];
?>