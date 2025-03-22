<?php
require_once "config.php";

if (isset($_POST["submit"])) {
    $title = $_POST["title"];
    $description = $_POST["description"];

    $query = "INSERT INTO note (title, description) VALUES ('$title','$description')";
    if ($connection->query($query) === FALSE) {

        echo "Hata: " . $query . "<br>" . $connection->error;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Note Book</title>
</head>

<body class="bg-secondary text-white">
    <div class="container">
        <h2 class="text-center">Note Added</h2>
        <button class="btn btn-primary"><a class="link-light" href="Notes.php">Notes</a></button>
    </div>
</body>

</html>