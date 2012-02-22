<?php
session_start();

define('__ROOT__', __DIR__);

if (file_exists(__ROOT__.'/.config.php')) {
    require __ROOT__.'/.config.php';
}

function isAdmin() {
    return !empty($_SESSION['isAdmin']);
}

if (isset($_admin_key) && isset($_GET[$_admin_key])) {
    $_SESSION['isAdmin'] = (int)$_GET[$_admin_key];
}

require __ROOT__.'/libraries/markdown.php';
require __ROOT__.'/libraries/class.MarkDownRenderer.php';
require __ROOT__.'/libraries/edit.php';
require __ROOT__.'/libraries/duration.php';
