<?php
require_once "config.php";


$query = "SELECT * FROM note";
$result = mysqli_query($connection, $query);
$notes = mysqli_fetch_all($result,MYSQLI_ASSOC);




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

    <h1 class="text-center my-3 fw-bolder fs-3">My Notes</h1>

    <div class="container">
        <div class="row mt-5">
            <?php foreach ($notes as $note): ?>
                <div class="col-3">
                    <div class="card w-75 mb-3 bg-info">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $note["title"] ?>
                            </h5>
                            <p class="card-text">Click the button for more description</p>
                            <a href="" class="btn btn-primary">More İnformation </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>


</body>

</html>