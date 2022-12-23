<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List Kehidupan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="bg-primary">
    <form action="insert.php" method="POST">
        <div class="container">
            <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3 col-md-6">
                <h3 class="text-center"><b>TO DO LIST KEHIDUPAN</b></h3>
            <div class="col-8">
                <input type="text" name="" class="form-control">
            </div>
            <div class="col-2">
                <button type="button" class="btn btn-outline-dark">Masukkan</button>
            </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script scr="https://kit.fontawesome.com/eb2cfeef2f.js" crossorigin="anonymous"></script>
    </form>

<!--getdata-->
<?php
include "config.php";
$rawData = mysqli_query($con, "select * from tbltodolistkehidupan");

?>
<div class= "container">
    <div class="col-8 bg-white m-auto mt-3">

        <table class="table">
            <tbody>
                <?php
                while ($row = mysqli_fetch_array($rawData)) {
                ?>
                <tr>
                    <td><?php echo $row['ID'] ?></td>
                    <td><?php echo $row['List'] ?></td>
                    <td style="width: 10%;"><a href="delete.php? ID= <?php echo $row['ID'] ?>" class="btn btn-outline-danger">Hapus</td>
                    <td style="width: 10%;"><a href="update.php? ID= <?php echo $row['ID'] ?>" class="btn btn-outline-success">Update</td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>