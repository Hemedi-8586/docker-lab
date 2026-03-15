<?php
$host = 'db-lab'; // Jina tuliloweka kwenye docker-compose
$user = 'root';
$pass = 'hemedi_pass';
$db   = 'mazoezi_db';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Duh! Database imekataa: " . $conn->connect_error);
}

echo "<h2>Hongera Hemede! Website na Database zimeungana ndani ya Docker!</h2>";
?>