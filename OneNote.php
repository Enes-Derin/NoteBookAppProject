<?php
require_once "config.php";

if (!isset($_GET["id"]) || !is_numeric($_GET["id"])) {
    header("Location: Notes.php?error=invalid_id");
    exit;
}

$id = intval($_GET["id"]); // ID'yi güvenli bir tamsayıya çevir

// Hazırlanmış sorgu kullan (SQL Injection önlenir)
$sql = "SELECT * FROM note WHERE id = $id";
$query=mysqli_query($connection,$sql);
$note = mysqli_fetch_assoc($query);

// Not bulunamazsa geri yönlendir
if (!$note) {
    header("Location: Notes.php?error=not_found");
    exit;
}

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

<body class="bg-secondary text-white">
    <div class="container">
        <div class="row mt-3">
            <div class="col-3">
                <h1 class="text-center ms-5 ps-5 fw-bolder fs-3">My Note</h1>
            </div>
            <div class="col-6"></div>
            <div class="col-3">
                <a class="link-light" href="NoteUpdate.php?id=<?php echo $note['id']; ?>">
                    <button class="btn btn-primary">Update</button>
                </a>
                <a class="link-light" href="NoteDelete.php?id=<?php echo $note['id']; ?>" onclick="return confirm('Bu notu silmek istediğinizden emin misiniz?');">
                    <button class="btn btn-danger">Delete</button>
                </a>
                <a href="Notes.php"><button class="btn btn-success">My Notes</button></a>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-3">
                <div class="card w-75 mb-3 bg-info">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($note["title"]); ?></h5>
                        <p class="card-text"><?php echo nl2br(htmlspecialchars($note["description"])); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
