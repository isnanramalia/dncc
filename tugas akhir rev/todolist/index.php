<?php
require_once __DIR__ . "/function.php";

// TAMBAH DATA
if (isset($_POST['tambahData'])) {
    $tugas = $_POST['tugas'];
    $deadline = $_POST['deadline'];

    tambahData($tugas, $deadline);

    header("location: index.php");
}

// DELETE DATA
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    hapusData($id);
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>todolist</title>
</head>

<body>
    <!-- form todolist -->
    <div class="container mt-5">
        <div class="card">
            <div class="card-header ">
                What do you want to do today?
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="tugas" class="form-label">Tasks</label>
                        <input type="text" name="tugas" class="form-control" id="tugas" required>
                    </div>
                    <div class="mb-3">
                        <label for="tugas" class="form-label">Deadline</label>
                        <input type="date" name="deadline" class="form-control" id="tugas" required>
                    </div>
                    <button type="submit" name="tambahData" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <!-- end form todolist -->

        <!-- form daftar todolist -->
        <div class="card mt-4">
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">My Task</th>
                            <th scope="col">Deadline</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- php di dalam html -->
                        <?php
                        $nomor = 1;
                        foreach (ambilData() as $data) {
                        ?>
                            <tr>
                                <th scope="row"><?php echo $nomor++ ?></th>
                                <td><?php echo $data['nama_tugas'] ?></td>
                                <td><?php echo date("d F Y", strtotime($data['deadline']))  ?></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $data['id'] ?>" type="button" class="btn btn-primary">Edit</a>
                                    <a href="?id=<?php echo $data['id'] ?>" onclick="return confirm('apakah anda yakin hapus data ini?')" type="button" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                        <!-- end php di dalam html -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end form daftar todolist -->

    <!-- link to bootstrap jss -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- end link to bootstrap jss -->
</body>


</html>