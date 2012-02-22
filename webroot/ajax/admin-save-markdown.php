<?php
require dirname(dirname(__DIR__)).'/bootstrap.php';

if (isset($_GET['path'], $_GET['content']) && isAdmin()) {
    $file = preg_replace('#[^a-zA-Z0-9-_]+/#', '', $_GET['path']);
    $path = __ROOT__.'/contents/'.$file;

    if (file_exists($path)) {
        $old = file_get_contents($path);
        if ($_GET['content'] != $old) {
            file_put_contents($path, $_GET['content']);
            shell_exec('git commit -m "Change made through web interface" '.escapeshellarg($path).' 2>&1');
        }

        $result = array("success" => "File saved!", "content" => MarkDownRenderer::getFromPath($file)->getHTML());
    } else {
        $result = array("error" => "File not found");
    }
} else {
    $result = array("error" => "Missing Info");
}

echo json_encode($result);
