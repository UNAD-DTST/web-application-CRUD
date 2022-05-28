<?php

session_start();

// Connection to DB
$connection = mysqli_connect(
    'localhost',
    'root',
    'secret',
    'web_application_crud'

);
