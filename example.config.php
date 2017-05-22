<?php

$domain = "//phixyn.com";
$config = array(
    "page_title" => "Home - Alpeche Pancha - Phixyn",
    "metadata" => array(
        "site_description" => "Phixyn's personal website",
        "site_keywords" => "Phixyn, is, awesome"
    ),
    "urls" => array(
        "root" => $domain,
        "pages" => $domain . "/pages",
        "blog" => $domain . "/blog"
    ),
    "paths" => array(
        "images" => array(
            "root" => "/redhawk/img",
            "social" => "/redhawk/social"
        ),
        "css" => "/redhawk/css",
        "js" => "/redhawk/js",
        "lib" => "/redhawk/lib",
        "fonts" => "/redhawk/fonts",
        "includes" => array(
            "templates" => __DIR__ . DIRECTORY_SEPARATOR . "/templates"
        )
    )
);

?>