<?php
include "./cone.php";
$id = $_GET['id'];
$sel = "SELECT * FROM crud_data WHERE id = '$id'";
$res = mysqli_query($conn, $sel);
if (isset($_POST['btn'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $city = $_POST['city'];
    $gender = $_POST['gender'];
    $project = $_POST['brands'];
    $im = implode(' And ', $project);
    $description = $_POST['des'];
    $qurey = "UPDATE crud_data SET name='$name',email='$email',password='$password',city='$city',gender='$gender',projects='$im',description='$description' WHERE id ='$id'";
    mysqli_query($conn, $qurey);
    header('location:read.php');
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
        height: 100%;
        width: 100%;
    }
</style>

<body>
    <div class="container my-4">

        <h1 class="text-center text-white bg-info">UPDATE DATA</h1>

        <form action="" method="post">
            <?php
            $num = 1;
            while ($data = mysqli_fetch_array($res)) {
            ?>
                <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="" value="<?php echo $data['name'] ?>" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $data['email'] ?>" />

                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" value="<?php echo $data['password'] ?>" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">City</label>
                    <select class="form-select form-select-lg" name="city" id="">
                        <option selected>Select one</option>
                        <option value="Hyderabad" <?php if ($data['city'] == "Hyderabad") {
                                                        echo "selected";
                                                    } ?>>Hyderabad</option>
                        <option value="Lahore" <?php if ($data['city'] == "Lahore") {
                                                    echo "selected";
                                                } ?>>Lahore</option>
                        <option value="Karachi" <?php if ($data['city'] == "Karachi") {
                                                    echo "selected";
                                                } ?>>Karachi</option>
                        <option value="Islamabad" <?php if ($data['city'] == "Islamabad") {
                                                        echo "selected";
                                                    } ?>>Islamabad</option>


                    </select>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="Male" id="" <?php if ($data['gender'] == "Male") {
                                                                                                        echo "checked";
                                                                                                    } ?> />
                    <label class="form-check-label" for=""> Male </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="Female" <?php if ($data['gender'] == "Female") {
                                                                                                    echo "checked";
                                                                                                } ?> />
                    <label class="form-check-label" for="">
                        Female
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="" value="Frontend" name="brands[]" <?php if (in_array('Frontend', explode(' And ', $data['projects']))) echo 'checked'; ?> />
                    <label class="form-check-label" for="">Frontend</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="" value="Backend " name="brands[]" <?php if (in_array('Backend ', explode(' And ', $data['projects']))) echo 'checked'; ?> />
                    <label class="form-check-label" for="">Backend</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="" value="Ui/Ux " name="brands[]" <?php if (in_array('Ui/Ux', explode(' And ', $data['projects']))) echo 'checked'; ?> />
                    <label class="form-check-label" for="">Ui/Ux </label>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label"> Description</label>
                    <textarea class="form-control" name="des" id="" rows="3"> <?php echo  $data['description']; ?></textarea>
                </div>
                <div class=" d-grid gap-2">
                    <button type="submit" class="btn btn-info my-3 " name="btn">
                        UPDATE
                    </button>
                </div>
            <?php
            }
            ?>
        </form>
    </div>



    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>