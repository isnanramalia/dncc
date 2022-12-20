<?php

require_once __DIR__ . "/koneksi.php";

function ambilData()
{
    $koneksi = koneksi();
    $sql = "SELECT * FROM todo";
    $result = $koneksi->query($sql);

    foreach ($result as $data) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
ambilData();
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

    <!-- Form tambah data -->
    <div class="container-sm card col-md-8 mt-5">
        <div class="card-header">
            Tambah Todolist
        </div>
        <div class="card-body">
            <!-- Start Form -->
            <form>
                <div class="mb-3">
                    <label class="form-label">Tugas saya</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Deadline</label>
                    <input type="date" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <!-- End Form -->
        </div>
    </div>

    <!-- End Form tambah data -->

    <!-- table data -->
    <div class="container-sm card mt-5 col-md-8">
        <div class="card-body">
            <!-- table bootstrap -->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Todo</th>
                        <th scope="col">Deadline</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>CRUD PHP</td>
                        <td>10-November-2022</td>
                        <td>
                            <a href="edit.php" class="btn btn-primary">Edit</a>
                            <button type="button" class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- end table data -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>