<?php
require_once("config.php");

// ID doğrulama
if (!isset($_GET["id"]) || !is_numeric($_GET["id"])) {
    header("Location: Notes.php?error=invalid_id");
    exit;
}

$id = $_GET["id"];

// Eğer form gönderildiyse (POST metodu ile geldiyse)
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = $_POST["title"];
    $description = $_POST["description"];

    // Güncelleme sorgusu
    $update_sql = "UPDATE note SET title='$title', description='$description' WHERE id=$id";
    $result = mysqli_query($connection, $update_sql);

    if ($result) {
        header("Location: Notes.php?ustatus=ok");
        exit;
    } else {
        echo "Güncelleme başarısız: " . mysqli_error($connection);
    }
} else {
    // İlk defa sayfa yüklendiğinde veriyi çek
    $sql = "SELECT * FROM note WHERE id=$id";
    $query = mysqli_query($connection, $sql);
    $data = mysqli_fetch_assoc($query);
}

mysqli_close($connection);
?>
<?php include "partials/_navbar.php";?>
<div class="col-3 text-end">
                <a href="Notes.php"><button class="btn btn-success">My Notes</button></a>
            </div>
        </div>

        <div class="w-50 mt-5 mx-auto">
            <form action="NoteUpdate.php?id=<?php echo $id; ?>" method="POST" class="p-5 border border-primary-subtle border-3">
                <div class="mb-3">
                    <label for="title" class="form-label fw-bold">Note's Title</label>
                    <input type="text" class="form-control" id="title" name="title"
                        value="<?php echo $data["title"]; ?>">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label fw-bold">Note's Description</label>
                    <textarea class="form-control" id="description" name="description" rows="5"><?php echo htmlspecialchars($data["description"]); ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>

</body>
</html>
