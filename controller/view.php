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
function searchArtikel($conn, $searchQuery)
{
    $searchQuery = "%" . $searchQuery . "%";
    $stmt = $conn->prepare("SELECT * FROM artikel WHERE judul LIKE ? OR content LIKE ?");
    $stmt->bind_param("ss", $searchQuery, $searchQuery);
    $stmt->execute();
    return $stmt->get_result();
}
function viewLatestGaleri($conn)
{
    $latestGaleri = $conn->query("SELECT * FROM galeri ORDER BY id_galeri DESC LIMIT 4");
    return $latestGaleri;
}
function viewAllGaleri($conn)
{
    $allGaleri = $conn->query("SELECT * FROM galeri");
    return $allGaleri;
}

