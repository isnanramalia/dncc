<?php

// EDIT DATA
if (isset($_GET['id'])) {
    $data = ambilSatuData($_GET['id']);
} else {
    header("location: index.php");
}

// TAMBAH DATA
if (isset($_POST['editData'])) {
    $tugas = $_POST['tugas'];
    $deadline = $_POST['deadline'];

    editData($tugas, $deadline);

    header("location: index.php");
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <!-- Form edit data -->
    <div class="container-sm card col-md-8 mt-5">
        <div class="card-header">
            Tambah Todolist
        </div>
        <div class="card-body">
            <!-- Start Form -->
            <form action="" method="POST">
                <div class="mb-3">
                    <label class="form-label">My Tasks</label>
                    <input type="text" name="tugas" class="form-control" id="tugas" value="<?php echo $data['nama_tugas'] ?>" require>
                </div>
                <div class="mb-3">
                    <label class="form-label">Deadline</label>
                    <input type="date" name="deadline" class="form-control" id="deadline" require>
                </div>
                <button type="submit" name="editData" class="btn btn-primary">Edit</button>
            </form>
            <!-- End Form -->
        </div>
    </div>
    <!-- End Form tambah data -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>