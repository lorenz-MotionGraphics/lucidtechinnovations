<?php
// Ensure that a POST request is made to this script
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the key and updated description from the form
    $key = $_POST['key'];
    $updatedDescription = $_POST['description'];

    // Read the existing data from suzume.json
    $jsonData = file_get_contents('suzume.json');
    $data = json_decode($jsonData, true);

    // Update the description for the specified key
    if (isset($data[$key])) {
        $data[$key]['description'] = $updatedDescription;
    }

    // Encode the updated data back to JSON
    $updatedJsonData = json_encode($data, JSON_PRETTY_PRINT);

    // Write the updated JSON data back to suzume.json
    file_put_contents('suzume.json', $updatedJsonData);

    // Redirect back to the page where the user was editing
    header('Location: control_panel.php'); // Change this URL to the appropriate page

    // Exit to prevent further script execution
    exit();
} else {
    // If someone tries to access this script via a GET request, simply redirect them to the homepage or an error page.
    header('Location: index.php'); // Change this URL to the appropriate page
    exit();
}
?>
