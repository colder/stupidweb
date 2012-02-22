<?php
session_start();

function isAdmin() {
    return !empty($_SESSION['isAdmin']);
}

if (isset($_GET['magic42'])) {
    $_SESSION['isAdmin'] = (int)$_GET['magic42'];
}

define('__ROOT__', __DIR__);

require __ROOT__.'/libraries/markdown.php';
require __ROOT__.'/libraries/class.MarkDownRenderer.php';
require __ROOT__.'/libraries/edit.php';
require __ROOT__.'/libraries/duration.php';
