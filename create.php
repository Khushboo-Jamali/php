<?php
include "./cone.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $city = $_POST['city'];
    $gender = $_POST['gender'];
    $project = $_POST['brands'];
    $im = implode(',', $project);
    $description = $_POST['des'];

    $qurey = "INSERT INTO crud_data( name, email, password, city, gender, projects, description) VALUES ('$name','$email','$password','$city','$gender','$im','$description')";
    $result = mysqli_query($conn, $qurey);
    if ($result) {
        header("location: read.php");
        # code...
    }
}


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
        height: 550px;
        width: 500px;
    }
</style>

<body>
    <div class="container my-2">

        <h1 class="text-center text-white bg-info">INSERT DATA</h1>

        <form action="" method="post">
            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="" placeholder="" />
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="" />

            </div>

            <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" />
            </div>

            <div class="mb-3">
                <label for="" class="form-label">City</label>
                <select class="form-select form-select-lg" name="city" id="">
                    <option selected>Select one</option>
                    <option value="Hyderabad">Hyderabad</option>
                    <option value="Lahore">Lahore</option>
                    <option value="Karachi">Karachi</option>
                    <option value="Islamabad">Islamabad</option>


                </select>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" value="Male" id="" />
                <label class="form-check-label" for=""> Male </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" value="Female" id="" />
                <label class="form-check-label" for="">
                    Female
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="Frontend" name="brands[]" />
                <label class="form-check-label" for="">Frontend</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="Backend" name="brands[]" />
                <label class="form-check-label" for="">Backend</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="Ui/Ux Designer" name="brands[]" />
                <label class="form-check-label" for="">Ui/Ux Designer</label>
            </div>

            <div class="mb-3">
                <label for="" class="form-label"> Description</label>
                <textarea class="form-control" name="des" id="" rows="3"></textarea>
            </div>

            <div class=" d-grid gap-2">
                <button type="submit" class="btn btn-info my-0">
                    Submit
                </button>
            </div>

        </form>
    </div>



    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>