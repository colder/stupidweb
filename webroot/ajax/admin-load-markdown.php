<?php
require dirname(dirname(__DIR__)).'/bootstrap.php';

if (isset($_GET['path']) && isAdmin()) {
    $path = __ROOT__.'/contents/'.preg_replace('#[^a-zA-Z0-9-_]+/#', '', $_GET['path']);

    if (file_exists($path)) {
        $result = array("content" => file_get_contents($path));
    } else {
        $result = array("error" => "File not found");
    }
} else {
    $result = array("error" => "Missing Info");
}


echo json_encode($result);
