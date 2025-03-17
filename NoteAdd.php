<?php
require_once "config.php";

if (isset($_POST["submit"])) {
    $title = $_POST["title"];
    $description = $_POST["description"];

    $query = "INSERT INTO note ('title','description') VALUES ('$title','$description')";
    mysqli_query($connection, $query);
    mysqli_close($connection);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />
    <title>My Note Book</title>
</head>

<body>
    <h1 class="text-center my-3 fw-bolder fs-3">Note Add</h1>

    <div class="w-50 mt-5 pt-5 container d-flex justify-content-center align-items-center ">
        <form class="w-50 p-5 border border-primary-subtle border-3" action="Notes.php" method="POST">
            <div class="mb-3">
                <label for="title" class="form-label" name="title">Note's Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Note's Description</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-outline-primary">Save</button>
        </form>
    </div>
</body>

</html>