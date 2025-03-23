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

<?php include "partials/_navbar.php";?>

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
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card note-card mb-3">
                    <div class="card-body">
                        <h5 class="card-title note-title"><?php echo htmlspecialchars($note["title"]); ?></h5>
                        <p class="card-text note-body"><?php echo nl2br(htmlspecialchars($note["description"])); ?></p>
                    </div>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </div>
</body>

</html>
