<?php

// Connection to a database
$conn = mysqli_connect("localhost", "root", "newtestpass@129", "ajaxtest");

echo 'Processing...';

// check for GET variable
if(isset($_GET['name'])){
    echo 'GET : Your name is '. $_GET['name'];
}

// check for POST variable
if(isset($_POST['name'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    //echo 'POST : Your name is '. $_POST['name'];

    $query = "INSERT INTO users(name) VALUES('$name')";

    if(mysqli_query($conn, $query)){
        echo 'User Added...';
    }
    else {
        echo 'ERROR: '. mysqli_error($conn);
    }
}