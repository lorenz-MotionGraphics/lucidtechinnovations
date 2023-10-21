<!DOCTYPE html>
<html>
<head>
  <title>Control Panel</title>
  <style>
    body { font-family: Arial, sans-serif; background-color: #f0f0f0; margin: 0; padding: 0; }
    h1 { background-color: #3498db; color: #fff; padding: 20px; margin: 0; text-align: center; }
    h2 { font-size: 24px; margin: 20px 0 10px; }
    table { width: 100%; border-collapse: collapse; background-color: #fff; }
    table, th, td { border: 1px solid #ccc; }
    th, td { padding: 10px; text-align: left; }
    th { background-color: #3498db; color: #fff; }
    tr:nth-child(even) { background-color: #f2f2f2; }
    tr:hover { background-color: #e0e0e0; }
    img { max-width: 100px; height: auto; }
    form { display: inline; }
    label { display: block; font-weight: bold; margin: 10px 0; }
    input[type="text"], textarea, input[type="file"] { width: 100%; padding: 10px; margin: 5px 0; }
    input[type="file"] { background-color: #f2f2f2; }
    button[type="submit"], button[type="reset"] {
      background-color: #3498db;
      color: #fff;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
      font-weight: bold;
    }
    button[type="reset"] { background-color: #e74c3c; }
  </style>
</head>
<body>
  <h1>Control Panel</h1>
  <h2>Previous Data</h2>
  <table>
    <tr>
      <th>Title</th>
      <th>Description</th>
      <th>Image</th>
      <th>Action</th>
    </tr>
    <?php
    $jsonData = file_get_contents('suzume.json');
    $data = json_decode($jsonData, true);
    foreach ($data as $key => $item) {
      echo '<tr>';
      echo '<td>' . $item['title'] . '</td>';
      echo '<td>' . $item['description'] . '</td>';
      echo '<td><img src="uploads/' . basename($item['image']) . '" alt="Card Image"></td>';
      echo '<td>';
      echo '<form method="get" action="control panel.php">';
      echo '<input type="hidden" name="delete_key" value="' . $key . '">';
      echo '<button type="submit">Delete</button>';
      echo '</form>';
      echo '</td>';
      echo '</tr>';
    }
    ?>
  </table>
  <h2>Add New Data</h2>
  <form action="suzume.php" method="post" enctype="multipart/form-data">
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" required>
    <label for="description">Description:</label>
    <textarea id="description" name="description" required></textarea>
    <label for="image">Image:</label>
    <input type="file" id="image" name="image" accept="image/jpeg, image/png, image/gif" required>
    <button type="submit">Submit</button>
  </form>
  <?php
  if (isset($_GET['delete_key'])) {
    $deleteKey = $_GET['delete_key'];
    if (isset($data[$deleteKey])) {
      unset($data[$deleteKey]);
      $newJsonData = json_encode(array_values($data), JSON_PRETTY_PRINT);
      file_put_contents('suzume.json', $newJsonData);
      header("Location: control panel.php");
      exit();
    }
  }
  ?>
</body>
</html>
