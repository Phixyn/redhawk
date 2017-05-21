<?php

$config = array(
    "page_title" => "Home - Alpeche Pancha - Phixyn",
    "metadata" => array(
        "site_description" => "Phixyn's personal website config file working",
        "site_keywords" => "Phixyn, is, awesome config gile"
    ),
    "paths" => array(
        "root" => __DIR__,
        "css" => __DIR__ . DIRECTORY_SEPARATOR . "../css",
        "js" => __DIR__ . DIRECTORY_SEPARATOR . "../js",
        "images" => array(
            "root" => __DIR__ . DIRECTORY_SEPARATOR . "../img",
            "social" => __DIR__ . DIRECTORY_SEPARATOR . "../img" . DIRECTORY_SEPARATOR . "social"
        ),
        "fonts" => __DIR__ . DIRECTORY_SEPARATOR . "../fonts",
        "templates" => __DIR__ . DIRECTORY_SEPARATOR . "../templates",
        "pages" => __DIR__ . DIRECTORY_SEPARATOR . "../pages",
        "blog" => __DIR__ . DIRECTORY_SEPARATOR . "../blog"
    )
);

?>