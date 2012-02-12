<?php

include dirname(__DIR__).'/bootstrap.php';


include __ROOT__.'/views/header.php';

$_display = isset($_GET['display']) ? $_GET['display'] : 'main';

$_display = rtrim($_display, "/");

switch ($_display) {
    case "about":
        $_page = "about";
        break;
    default:
        $_page = "main";
}
include __ROOT__.'/views/'.$_page.'.php';

include __ROOT__.'/views/footer.php';
