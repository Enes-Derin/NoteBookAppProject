<?php
require_once("config.php");

$id = $_GET["id"];
if (!isset($id) || !is_numeric($id)) {
    header("Location: Notes.php?error=invalid_id");
}
$sql = "SELECT * FROM note WHERE id=$id";
$query = mysqli_query($connection, $sql);
$data = mysqli_fetch_assoc($query);




mysqli_close($connection);
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

    <div class="container">
        <div class="row mt-3">
            <div class="col-3">
                <h1 class="text-center ms-5 ps-5 fw-bolder fs-3">Note Update</h1>
            </div>
            <div class="col-6"></div>
            <div class="col-3">
                <a href="Notes.php"><button class="btn btn-success">My Notes</button></a>
            </div>
        </div>

        <div class="w-50 mt-5 pt-5 container d-flex justify-content-center align-items-center ">
            <form class="w-50 p-5 border border-primary-subtle border-3" action="NoteUpdate.php" method="POST">
                <div class="mb-3">
                    <label for="title" class="form-label fw-bolder" name="title">Note's Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?php echo $data["title"];?>">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label fw-bolder">Note's Description</label>
                    <textarea class="form-control" id="description" name="description"><?php echo $data["description"];?></textarea>
                </div>
                <button type="submit" name="submit" class="btn btn-success">Save</button>

            </form>
        </div>
    </div>

</body>

</html>