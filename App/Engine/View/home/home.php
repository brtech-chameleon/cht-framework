<?php

use App\Engine\View\ChtTemplateEngine;

$profile = new ChtTemplateEngine("tpl/home.tpl");
$profile->set("username", "monk3y");
$profile->set("photoURL", "photo.jpg");
$profile->set("name", "Monkey man");
$profile->set("age", "23");
$profile->set("location", "Portugal");
 
$layout = new ChtTemplateEngine("layout.tpl");
$layout->set("title", "User profile");
$layout->set("content", $profile->output());

echo $layout->output();