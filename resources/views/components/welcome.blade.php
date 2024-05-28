<?php
// dashboard.php

// Mock data for demonstration purposes
$currentFloodRisk = "High";
$historicalData = [
    ["date" => "2024-05-01", "risk" => "Low"],
    ["date" => "2024-05-02", "risk" => "Moderate"],
    ["date" => "2024-05-03", "risk" => "High"],
];
$alerts = [
    ["time" => "2024-05-28 14:00", "message" => "Flash Flood Warning"],
    ["time" => "2024-05-28 16:00", "message" => "River levels rising"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flood Prediction Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.css" />
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 20px; }
        .container { display: flex; flex-wrap: wrap; gap: 20px; }
        .box { flex: 1; min-width: 300px; padding: 20px; border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9; }
        .box h2 { margin-top: 0; }
        #map { height: 400px; width: 100%; }
        .alert { background-color: #ffcccb; padding: 10px; margin-bottom: 10px; border-radius: 4px; }
    </style>
</head>
<body>

    <h1>Flood Prediction Dashboard</h1>
    
    <div class="container">
        <!-- Current Flood Risk -->
        <div class="box">
            <h2>Current Flood Risk Level</h2>
            <p><strong><?php echo $currentFloodRisk; ?></strong></p>
        </div>

        <!-- Historical Data -->
        <div class="box">
            <h2>Historical Data</h2>
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Risk Level</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($historicalData as $data): ?>
                        <tr>
                            <td><?php echo $data['date']; ?></td>
                            <td><?php echo $data['risk']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- Map -->
        <div class="box" style="flex-basis: 100%;">
            <h2>Flood-Prone Areas Map</h2>
            <div id="map"></div>
        </div>

        <!-- Alerts and Notifications -->
        <div class="box" style="flex-basis: 100%;">
            <h2>Alerts and Notifications</h2>
            <?php foreach ($alerts as $alert): ?>
                <div class="alert">
                    <strong><?php echo $alert['time']; ?>:</strong> <?php echo $alert['message']; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"></script>
    <script>
        // Initialize the map
        var map = L.map('map').setView([51.505, -0.09], 13);

        // Set up the OSM layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
        }).addTo(map);

        // Mock data for flood-prone areas
        var floodProneAreas = [
            { "lat": 51.505, "lng": -0.09, "label": "Area 1" },
            { "lat": 51.515, "lng": -0.10, "label": "Area 2" },
        ];

        // Add markers to the map
        floodProneAreas.forEach(function(area) {
            L.marker([area.lat, area.lng]).addTo(map)
                .bindPopup(area.label)
                .openPopup();
        });
    </script>
</body>
</html>
