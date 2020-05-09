<?php

$domain = "//phixyn.com";
$config = array(
    "version" => "v0.4.1 (6ae5eb2)",
    "page_title" => "Home - Alpeche Pancha - Phixyn",
    "metadata" => array(
        "site_description" => "Phixyn's personal website",
        "site_keywords" => "Phixyn, is, awesome"
    ),
    "active_page" => "",
    "urls" => array(
        "root" => $domain,
        "pages" => array(
            "root" => $domain . "/pages",
            "projects" => $domain . "/pages/projects",
        ),
        "blog" => $domain . "/blog"
    ),
    "paths" => array(
        "images" => array(
            "root" => "/img",
            "social" => "/img/social"
        ),
        "css" => "/css",
        "fonts" => "/fonts",
        "js" => "/js",
        "lib" => "/lib",
        "static" => "/static",
        "includes" => array(
            "templates" => __DIR__ . DIRECTORY_SEPARATOR . "/templates"
        )
    )
);

?>