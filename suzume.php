<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $title = $_POST['title'];
  $description = $_POST['description'];
  $uploadsDir = 'uploads/';
  $uploadedFile = realpath($uploadsDir) . '/' . basename($_FILES['image']['name']);
  move_uploaded_file($_FILES['image']['tmp_name'], $uploadedFile);
  $data = [
    'title' => $title,
    'description' => $description,
    'image' => $uploadedFile
  ];
  $jsonFile = 'suzume.json';
  $jsonData = file_get_contents($jsonFile);
  $existingData = json_decode($jsonData, true);
  $existingData[] = $data;
  $newJsonData = json_encode($existingData, JSON_PRETTY_PRINT);
  file_put_contents($jsonFile, $newJsonData);
}
?>
