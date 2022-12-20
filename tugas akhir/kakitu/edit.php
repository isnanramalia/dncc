<?php
require_once __DIR__ . "/function.php";

// AMBIL SATU DATA
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $data = ambilSatuData($id)->fetch();
} else {
    header("location: index.php");
}

// TAMBAH DATA
if (isset($_POST['editData'])) {
    $tugas = $_POST['tugas'];
    $deadline = $_POST['deadline'];

    editData($data['id'], $tugas, $deadline);

    header("location: index.php");
}

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="../icon.png">
    <title>My Todolist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#home">ISNA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.html">Home</a>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">CRUD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.html">About me</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.html">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.html">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end navbar -->


    <!-- jumbotron -->
    <section id="home" class="jumbotron text-center">
        <img src="atribut/The_death.png" alt="profile" height="200px">
        <h1 class="display-5" style="margin-top: 50px;">edit todolist</h1>
    </section>
    <!-- end jumbotron -->


    <!-- edit -->
    <div class="container">
        <div class="card" style="margin-top: 70px;">
            <div class="card-header" style="background-color: #E2EDFF;">
                Edit
            </div>
            <div class="card-body">
                <!-- form -->
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="tugas" class="form-label">Tasks</label>
                        <input type="text" name="tugas" class="form-control" id="tugas" value="<?php echo $data['nama_tugas'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="deadline" class="form-label">Deadline</label>
                        <input type="date" name="deadline" class="form-control" id="deadline" value="<?php echo $data['deadline'] ?>" required>
                    </div>
                    <button type="submit" name="editData" class="btn btn-primary" style="float: right;">Done</button>
                </form>
                <!-- end form -->
            </div>
        </div>
    </div>
    <!-- end edit -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>