<?php include 'head.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Lokasi Gangguan</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        #map {
            height: 700px;
            width: 100%;
            margin-bottom: 0px;
        }
        #form-container {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
        <div id="form-container">
            <form id="location-form">
                
            </form>
        </div>
    <div id="map"></div>

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.js"></script>
    <script>
        var map = L.map('map').setView([0.5070677, 101.441176], 10);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        function loadMarkers() {
            fetch('get_locations.php')
                .then(response => response.json())
                .then(data => {
                    data.forEach(location => {
                        L.marker([location.latitude, location.longitude]).addTo(map)
                            .bindPopup(`${location.nama}<br>Alamat: ${location.alamat}`);
                    });
                });
        }

        document.getElementById('location-form').addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(this);
            fetch('aksi_edit_migrasi.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                alert(data);
                loadMarkers(); // Reload markers after adding a new one
            })
            .catch(error => console.error('Error:', error));
        });

        // Initial load of markers
        loadMarkers();

        // Function to calculate route
       
    </script>
</body>
</html>
