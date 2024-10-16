<?php
// Mendapatkan konten JSON yang dikirim oleh client
$json_data = file_get_contents("php://input");

// Mengonversi JSON ke dalam array PHP
$data = json_decode($json_data, true);

// Menampilkan data yang diterima
if ($data !== null) {
    echo "Data Received:\n";
    echo "Name: " . $data['name'] . "\n";
    echo "Email: " . $data['email'] . "\n";
    echo "Age: " . $data['age'] . "\n";
} else {
    echo "No valid JSON received.";
}
?>
