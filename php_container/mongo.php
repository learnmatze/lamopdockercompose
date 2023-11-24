<?php

echo extension_loaded("mongodb") ? "mongodb loaded\n" : "mongodb not loaded\n";

$manager = new MongoDB\Driver\Manager("mongodb://mongodb:27017");

// $query = new MongoDB\Driver\Query(array('age' => 30));
$query = new MongoDB\Driver\Query(array('Firstname' => 'John'));

$cursor = $manager->executeQuery('persons.persons', $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persons List</title>
</head>
<body>

<style>
    ul {
        list-style-type: none;
        padding: 0;
    }

    li {
        margin-bottom: 10px;
        padding: 10px;
        border: 1px solid #ddd;
        background-color: #f9f9f9;
        border-radius: 5px;
    }
</style>

<?php
echo '<h2>Persons:</h2>';
echo '<ul>';
foreach ($cursor as $document) {
    echo '<li>';    
    echo 'Firstname: ' . $document->Firstname . ' Lastname: ' .  $document->Lastname . ', Age: ' . $document->age;
    echo '</li>';
}
echo '</ul>';

?>

