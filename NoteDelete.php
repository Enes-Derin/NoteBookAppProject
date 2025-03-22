<?php
require_once "config.php";

if (!isset($_GET["id"]) || !is_numeric($_GET["id"])) {
    header("Location: Notes.php?dstatus=error");
    exit;
}

$id = intval($_GET["id"]); // ID'yi güvenli sayıya çeviriyoruz

$sql =  "DELETE FROM note WHERE id = $id";
$query=mysqli_query($connection, $sql);

if (mysqli_affected_rows($connection) > 0) {
    header("Location: Notes.php?dstatus=ok"); // Başarılı silme
} else {
    header("Location: Notes.php?dstatus=no"); // Silme başarısız
}

mysqli_close($connection);
exit;
?>