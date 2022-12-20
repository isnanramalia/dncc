<?php
require_once __DIR__ . "/function.php";


// TAMBAH DATA
if (isset($_POST['tambahData'])) {
    $tugas = $_POST['tugas'];
    $deadline = $_POST['deadline'];
    tambahData($tugas, $deadline);
    header("location: index.php");
}

// HAPUS DATA
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    hapusData($id);
    header("location: index.php");
}

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="../icon.png">
    <title>my todolist</title>
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
        <h1 class="display-5" style="margin-top: 50px;">todolist</h1>
    </section>
    <!-- end jumbotron -->


    <!-- todolist -->
    <div class="container">
        <div class="card" style="margin-top: 50px;">
            <div class="card-header" style="background-color: #E2EDFF;">
                <b>Add a task?</b>
            </div>
            <div class="card-body">
                <!-- form -->
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="tugas" class="form-label">Tasks</label>
                        <input type="text" name="tugas" class="form-control" id="tugas" required>
                    </div>
                    <div class="mb-3">
                        <label for="deadline" class="form-label">Deadline</label>
                        <input type="date" name="deadline" class="form-control" id="deadline" required>
                    </div>
                    <button type="submit" name="tambahData" class="btn btn-primary" style="float: right;">Submit</button>
                </form>
                <!-- end form -->
            </div>
        </div>
        <div class="card mt-5">
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">My Tasks</th>
                            <th scope="col">Deadline</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach (ambilData() as $data) { ?>
                            <tr>
                                <th scope="row"><?php echo $nomor++ ?></th>
                                <td><?php echo $data['nama_tugas'] ?></td>
                                <td><?php echo date("d F Y", strtotime($data['deadline'])) ?></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $data['id'] ?>" class="btn btn-warning">Edit</a>
                                    <a href="?id=<?php echo $data['id'] ?>" onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end todolist -->


    <!-- Footer -->
    <footer class="bg-primary text-white text-center pb-2">
        <p>Created with love <i class="bi bi-heart-fill text-danger"></i> by <a href="https://www.instagram.com/isnanramalia" class="text-white fw-bold">isna nur
                amalia</a>
        </p>
    </footer>
    <!-- end footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>