<?php
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

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'config') {
    // Get form data
    $nama = $_POST['nama'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];
    $alamat = $_POST['alamat'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO lokasi (nama, alamat, latitude, longitude) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssdd", $nama, $alamat, $latitude, $longitude);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New location added successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();

    // Redirect back to the map page
    header("Location: index.php");
    exit();
} else {
    echo "Invalid request";
}
?>
