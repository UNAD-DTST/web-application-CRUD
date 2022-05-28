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
            <a class="btn btn-outline-success" href="create-employees.php">New</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <?php if (isset($_SESSION['message'])) : ?>
                <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php session_unset(); ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12">
            <!-- <table class="table table-striped"> -->
            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Identification</th>
                        <th scope="col">Title</th>
                        <th scope="col">Address</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM employees";
                    $result_task = mysqli_query($connection, $query);

                    while ($row = mysqli_fetch_array($result_task)) { ?>
                        <tr>
                            <th scope="row"><?= $row['id'] ?></th>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1"><?= $row['name'] . " " . $row['surname'] ?></p>
                                        <p class="text-muted mb-0"><?= $row['email'] ?></p>
                                    </div>
                                </div>
                            </td>
                            <td><?= $row['identification'] ?></td>
                            <td><?= $row['title'] ?></td>
                            <td><?= $row['address'] ?></td>
                            <td><?= $row['phone'] ?></td>
                            <td><?php if ((int)$row['active'] === 1) : ?>
                                    <span class="badge bg-success rounded-pill d-inline">Active</span>
                                <?php else : ?>
                                    <span class="badge bg-danger rounded-pill d-inline">Inactive</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark" href="edit_employee.php?id=<?= $row['id'] ?>">
                                    Edit
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>