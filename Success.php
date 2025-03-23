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
<?php include("partials/_navbar.php") ?>
<div class="col-3">
<a class="link-light" href="Notes.php"><button class="btn btn-primary">Notes</button></a>
  
</div>
</div>

<body class="bg-secondary text-white">
    <div class="container">
        <h2 class="text-center">Note Added</h2>
    </div>
</body>

</html>