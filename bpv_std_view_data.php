<?php
// Haal alle records uit de tabel en echo deze in een jsonstring naar het scherm.
    include("connect_db.php");
    $conn = mysqli_connect($servername, $username, $password, $databaseName);
    $query = "SELECT * FROM `users`";
    $resource = mysqli_query($conn, $query);
    $resultArray = mysqli_fetch_all($resource, MYSQLI_ASSOC);
    echo json_encode($resultArray);
?>