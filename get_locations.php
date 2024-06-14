<?php
header('Content-Type: application/json');

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pelayanan_pln";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch location data
$sql = "SELECT * FROM lokasi";
$result = $conn->query($sql);

$locations = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $locations[] = [
            'latitude' => $row['latitude'],
            'longitude' => $row['longitude'],
            'nama' => $row['nama'],
            'alamat' => $row['alamat']
        ];
    }
}

$conn->close();

// Return data as JSON
echo json_encode($locations);
?>
