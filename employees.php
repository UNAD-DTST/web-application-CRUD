<?php
include('db.php');
include('includes/head.php');
include('includes/footer.php');
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-9">
            <h1>Employees</h1>
        </div>
        <div class="col-3">
            <a class="btn btn-outline-success" href="create-employees.php">Nuevo</a>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12">
            <!-- Table for list the employees -->
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>