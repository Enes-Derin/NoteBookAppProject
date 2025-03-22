<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />
    <title>My Note Book</title>
    <style>
        textarea {
            width: 500px;
            height: 200px;
            resize: vertical;
            /* Kullanıcı sadece dikeyde büyütebilir */
        }
    </style>
</head>

<body class="bg-secondary text-white">

    <div class="container">
        <div class="row mt-3">
            <div class="col-3">
                <h1 class="text-center ms-5 ps-5 fw-bolder fs-3">Note Add</h1>
            </div>
            <div class="col-6"></div>
            <div class="col-3">
                <a class="link-light" href="Notes.php"><button class="btn btn-primary">My Notes</button></a>

            </div>
        </div>
    </div>


    <div class="w-50 mt-5 pt-5 container d-flex justify-content-center align-items-center ">
        <form class="w-50 p-5 border border-primary-subtle border-3" action="Success.php" method="POST">
            <div class="mb-3">
                <label for="title" class="form-label fw-bolder" name="title">Note's Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label fw-bolder">Note's Description</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-success">Save</button>

        </form>
    </div>
</body>

</html>