<?php
include "./cone.php";
$qurey = "SELECT *FROM crud_data";
$result = mysqli_query($conn, $qurey);
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>
<style>
    .container {
        height: 100%;
        width: 110%;
    }
</style>

<body>

    <div class="container my-4 text-center ">
        <h1 class="text-center text-white bg-info ">READ DATA</h1>
        <div class="table-responsive">
            <table class="table table-info">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NAME</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">PASSWORD</th>
                        <th scope="col">CITY</th>
                        <th scope="col">GENDER</th>
                        <th scope="col">PROJECTS</th>
                        <th scope="col">DESCRIPTION</th>
                        <th scope="col">ACTIONS</th>



                    </tr>
                </thead>
                <?php
                $num = 1;

                while ($data = mysqli_fetch_array($result)) {
                    $ex = explode(',', $data['projects']);
                ?>

                    <tbody>
                        <tr class="mb-3">
                            <td><?php echo $num ?></td>
                            <td><?php echo $data['name'] ?></td>
                            <td><?php echo $data['email'] ?></td>
                            <td><?php echo $data['password'] ?></td>
                            <td><?php echo $data['city'] ?></td>
                            <td><?php echo $data['gender'] ?></td>
                            <td><?php echo implode(',', $ex); ?></td>
                            <td><?php echo $data['description']; ?></td>


                            <td>
                                <a href="update.php?id=<?php echo $data['id'] ?>" class="btn btn-success">Update</a>
                                <a href="delete.php?id=<?php echo $data['id'] ?>" class="btn btn-danger">Delete</a>
                            </td>

                        </tr>

                    </tbody>
                <?php
                    $num++;
                }
                ?>
            </table>

        </div>

        <a href="./create.php"> <input type="submit" class="btn btn-info my-1 " value="   CREATE DATA"> </a>

    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>