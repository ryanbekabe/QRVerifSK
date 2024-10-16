<?php
// URL tujuan untuk menerima data
$url = 'http://localhost/verifqr/receive_json.php';

// Data yang akan dikirim
$data = array(
    "name" => "John Doe",
    "email" => "john@example.com",
    "age" => 28
);
echo "$data: ". $data;
echo "<br>";
// Mengonversi data array ke format JSON
$json_data = json_encode($data);

// Inisiasi cURL
$ch = curl_init($url);

// Setel opsi cURL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);

// Eksekusi cURL dan dapatkan respon dari server
$response = curl_exec($ch);

// Tutup cURL
curl_close($ch);

// Tampilkan respon dari server
echo "Response from server: " . $response;
?>
