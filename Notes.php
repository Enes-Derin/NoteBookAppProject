<?php
require_once "config.php";


$query = "SELECT * FROM note";
$result = mysqli_query($connection, $query);
$notes = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_close($connection);
?>


<?php include "partials/_navbar.php";?>
            <div class="col-3">
               <a class="link-light" href="NoteAdd.php"> <button class="btn btn-primary">Note Add</button></a>

            </div>
        </div>
        <div class="row mt-5">
            <?php foreach ($notes as $note): ?>
                <div class="col-3" >
                    <div class="card note-card mb-3" style="width: 300px; height: 170px;">
                        <div class="card-body">
                            <h5 class="card-title note-title">
                                <?php echo $note["title"] ?>
                            </h5>
                            <p class="card-text note-body"><?php echo substr($note["description"],0,38)?></p>
                        </div>
                        <a href="OneNote.php?id=<?php echo $note["id"]?>" class="more-description"><button class="btn">More İnformation</button></a>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>


</body>

</html>