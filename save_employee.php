<?php
// Include db connection file
include("db.php");

//Check if POST method has parameter to create employee
if (isset($_POST["create_employee"])) {
    $email = $_POST['input-email'];
    $identification = $_POST['input-identification'];
    $name = $_POST['input-name'];
    $surname = $_POST['input-surname'];
    $title = $_POST['input-title'];
    $address = $_POST['input-address'];
    $phone = $_POST['input-phone'];

    if (!empty($_FILES["input-photo"]["name"])) {
        // Get file info 
        $fileName = basename($_FILES["input-photo"]["name"]);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

        // Allow certain file formats 
        $allowTypes = array('jpg', 'png', 'jpeg');
        if (in_array($fileType, $allowTypes)) {
            $image = $_FILES['input-photo']['tmp_name'];
            $imgContent = addslashes($_FILES["input-photo"]["name"]);
        }
    }

    // Query to upload employee info into DB
    $query = "INSERT INTO employees (email, identification, name, surname, title, address, phone, photo)
    VALUES ('$email', '$identification', '$name', '$surname', '$title', '$address', '$phone', '{$imgContent}')";
    $result = mysqli_query($connection, $query);
    var_dump($result);
    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message'] = 'Employee Saved Sucessfully';
    $_SESSION['message_type'] = 'success';

    //Redirect
    header("Location: employees.php");
}
