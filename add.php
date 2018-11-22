<?php

// START 2
require_once('init.php');

if (isset($_POST['done']))
{
    $folder = '/photos/photos/';
    $ext = '.jpg';
    $name = $mysqli->real_escape_string($_POST['name']);
    $mysqli->query('
    INSERT INTO photos
    SET token = "' . md5($name . 'zoomsuppport') . '",
        name = "' . $name . '",
        path = "' . $folder . strtolower($name) . $ext . '"');

    header ('Location: add.php');
    exit;
}
?>

