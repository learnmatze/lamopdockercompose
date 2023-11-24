<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server and PHP Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            color: #333;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h1>Server and PHP Information</h1>

<?php
// Function to get server information
function getServerInfo() {
    return [
        'Server Software' => $_SERVER['SERVER_SOFTWARE'],
        'Server Name' => $_SERVER['SERVER_NAME'],
        'Server Address' => $_SERVER['SERVER_ADDR'],
        'Server Port' => $_SERVER['SERVER_PORT'],
    ];
}

// Display server information
echo "<h2>Server Information</h2>";
echo "<table>";
echo "<tr><th>Property</th><th>Value</th></tr>";
foreach (getServerInfo() as $property => $value) {
    echo "<tr><td>{$property}</td><td>{$value}</td></tr>";
}
echo "</table>";

// Display PHP information
echo "<h2>PHP Information</h2>";
echo "<table>";
echo "<tr><th>Property</th><th>Value</th></tr>";
echo "<tr><td>PHP Version</td><td>" . phpversion() . "</td></tr>";
echo "<tr><td>PHP Configuration File</td><td>" . php_ini_loaded_file() . "</td></tr>";
echo "<tr><td>PHP Extension: mysqli</td><td>" . (extension_loaded('mysqli') ? 'Enabled' : 'Disabled') . "</td></tr>";
echo "</table>";
?>

</body>
</html>