<?php include("partials/_navbar.php") ?>
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