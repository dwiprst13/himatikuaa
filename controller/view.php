<?php
include("./controller/config.php");
function viewLatestArtikel($conn)
{
    $latestArtikel = $conn->query("SELECT * FROM artikel ORDER BY date DESC LIMIT 4");
    return $latestArtikel;
}
function viewAllArtikel($conn)
{
    $allArtikel = $conn->query("SELECT * FROM artikel");
    return $allArtikel;
}
include("./controller/config.php");
function viewLatestGaleri($conn)
{
    $latestGaleri = $conn->query("SELECT * FROM galeri ORDER BY date DESC LIMIT 4");
    return $latestGaleri;
}
function viewAllGaleri($conn)
{
    $allGaleri = $conn->query("SELECT * FROM galeri");
    return $allGaleri;
}

