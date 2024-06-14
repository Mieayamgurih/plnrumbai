<?php include 'head.php' ?>

<main id="main" class="main">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Lokasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 600px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        input[type="text"],
        input[type="number"],
        textarea,
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Input Data Lokasi Rawan Gangguan Listrik </h2>
        <form action="aksi_edit_migrasi.php" method="post">
            <label for="nama">Jenis Gangguan:</label>
            <input type="text" name="nama" required>
            <label for="latitude">Latitude:</label>
            <input type="number" name="latitude" step="any" required>
            <label for="longitude">Longitude:</label>
            <input type="number" name="longitude" step="any" required>
            <label for="alamat">Alamat:</label>
            <textarea name="alamat" rows="4" required></textarea>
            <input type="hidden" name="action" value="config"> <!-- Action for inserting data into 'lokasi' table -->
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>


</main><!-- End #main -->
<br><br><br><br><br><br><br><br>
<?php include 'foot.php'?>