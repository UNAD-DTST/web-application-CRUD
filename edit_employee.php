<?php
include('db.php');
include('includes/head.php');
include('includes/footer.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM employees WHERE id = $id";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
    }
}

if (isset($_POST['update_employee'])) {
    $id = $_GET['id'];
    $email = $_POST['input-email'];
    $identification = $_POST['input-identification'];
    $name = $_POST['input-name'];
    $surname = $_POST['input-surname'];
    $title = $_POST['input-title'];
    $address = $_POST['input-address'];
    $phone = $_POST['input-phone'];
    $active = $_POST['input-active'];

    // Query to upload employee info into DB
    $query = "UPDATE employees set email = '$email', identification = '$identification', name = '$name', surname = '$surname', title = '$title', address = '$address', phone = '$phone', active = '$active'
            WHERE id = $id";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message'] = 'Employee update  Sucessfully';
    $_SESSION['message_type'] = 'warning';


    //Redirect
    header("Location: employees.php");
}

?>

<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h1>Edit Employee</h1>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12">
            <form action="edit_employee.php?id=<?= $_GET['id'] ?>" method="POST" enctype="multipart/form-data">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="input-email" name="input-email" placeholder="name@example.com" value="<?= $row['email'] ?>">
                    <label for="input-email">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="input-identification" name="input-identification" placeholder="123456789" value="<?= $row['identification'] ?>">
                    <label for="input-identification">Identification</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="input-name" name="input-name" placeholder="Jhon" value="<?= $row['name'] ?>">
                    <label for="input-name">Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="input-surname" name="input-surname" placeholder="Doe" value="<?= $row['surname'] ?>">
                    <label for="input-surname">Surname</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="input-title" name="input-title" placeholder="Auxiliar" value="<?= $row['title'] ?>">
                    <label for="input-title">Title</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="input-address" name="input-address" placeholder="Calle 1" value="<?= $row['address'] ?>">
                    <label for="input-address">Address</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="input-phone" name="input-phone" placeholder="+57300" value="<?= $row['phone'] ?>">
                    <label for="input-phone">Phone</label>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" id="input-active" name="input-active" value="<?= $row['active'] ?>">
                        <?php if ((int) $row['active'] === 1) : ?>
                            <option value="1" selected>Active</option>
                            <option value="0">Inactive</option>
                        <?php else : ?>
                            <option value="1">Active</option>
                            <option value="0" selected>Inactive</option>
                        <?php endif; ?>
                    </select>
                    <label for="input-active">State</label>
                </div>
                <button type="submit" class="btn btn-primary" name="update_employee">Update</button>
            </form>
        </div>
    </div>
</div>