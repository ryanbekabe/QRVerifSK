<?php
// Mengecek apakah parameter 'data' ada dalam URL
// http://localhost/verifqr/receive_json2.php?data={%22x%22:%22sks%22,%22t%22:%221273/71024/IGD/IX/2024%22}
// http://localhost/verifqr/receive_json2.php?data=("x":"sks","t":"1273/71024/IGD/IX/2024")
// http://localhost/verifqr/receive_json2.php?data={"x":"sks","t":"1273/71024/IGD/IX/2024"}

if (isset($_GET['data'])) {
    // Mendapatkan data JSON yang dikirim melalui GET
    $json_data = $_GET['data'];
    
    // Mengonversi data JSON menjadi array PHP
    $data = json_decode($json_data, true);
    
    // Mengecek apakah data valid
    if ($data !== null) {
        echo "Data Received:\n";
        echo "x: " . $data['x'] . "\n";
        echo "t: " . $data['t'] . "\n";
    } else {
        echo "Invalid JSON data received.";
    }
} else {
    echo "No data received.";
}
?>
