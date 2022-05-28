<?php
include('db.php');
include('includes/head.php');
include('includes/footer.php');
?>


<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h1>Employees</h1>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12">
            <form action="save_employee.php" method="POST" enctype="multipart/form-data">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="input-email" name="input-email" placeholder="name@example.com">
                    <label for="input-email">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="input-identification" name="input-identification" placeholder="123456789">
                    <label for="input-identification">Identification</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="input-name" name="input-name" placeholder="Jhon">
                    <label for="input-name">Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="input-surname" name="input-surname" placeholder="Doe">
                    <label for="input-surname">Surname</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="input-title" name="input-title" placeholder="Auxiliar">
                    <label for="input-title">Title</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="input-address" name="input-address" placeholder="Calle 1">
                    <label for="input-address">Address</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="input-phone" name="input-phone" placeholder="+57300">
                    <label for="input-phone">Phone</label>
                </div>

                <!-- <div class="mb-3">
                    <label for="input-photo" class="form-label">Photo</label>
                    <input class="form-control" type="file" name="input-photo" id="input-photo">
                </div> -->
                <button type="submit" class="btn btn-primary" name="create_employee">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>