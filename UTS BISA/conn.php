<?php
$conn = mysqli_connect("sql111.unaux.com", "unaux_28559159", "Abasa0702", "unaux_28559159_uts");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_array($result)) {
        $rows[] = $row;
    }
    return $rows;
}
