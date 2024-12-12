<?php

require getLang();

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function getLang()
{
    $lang = 'fr';

    if (isset($_SESSION['lang'])) {
        $lang = $_SESSION['lang'];

    } else if (isset($_GET['lang'])) {
        $lang = $_GET['lang'];

    }

    return "./languages/{$lang}.php";
}