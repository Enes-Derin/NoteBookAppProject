<?php
require_once "config.php";


$query = "SELECT * FROM note";
$result = mysqli_query($connection, $query);
$notes = mysqli_fetch_all($result, MYSQLI_ASSOC);




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


    <div class="container ">
        <div class="row mt-3">
            <div class="col-3">
                <h1 class="text-center ms-5 ps-5 fw-bolder fs-3">My Notes</h1>
            </div>
            <div class="col-6"></div>
            <div class="col-3">
               <a class="link-light" href="NoteAdd.php"> <button class="btn btn-primary">Note Add</button></a>

            </div>
        </div>
        <div class="row mt-5">
            <?php foreach ($notes as $note): ?>
                <div class="col-3" >
                    <div class="card mb-3 bg-info" style="width: 300px; height: 170px;">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $note["title"] ?>
                            </h5>
                            <p class="card-text"><?php echo substr($note["description"],0,38)?></p>
                            <a href="OneNote.php?id=<?php echo $note["id"]?>" class="btn btn-primary">More İnformation </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>


</body>

</html>