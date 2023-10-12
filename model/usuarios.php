<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "../connection/database.php");

function all()
{
    global $mysqli;
    $response = $mysqli->query("SELECT id FROM usuarios");
    $data = $response->fetch_all(MYSQLI_ASSOC);

    return $data;
}

function getByID($id)
{
    global $mysqli;
    $response = $mysqli->query("SELECT * FROM usuarios WHERE id = $id");
    $data = $response->fetch_assoc();

    return $data;
}