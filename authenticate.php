<?php
session_start();
include 'db.php';

if(isset($_POST['username'], $_POST['password'], $_POST['role'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    if($role == 'admin'){
        $table = 'admin';
        $name_field = 'full_name';
    } elseif($role == 'staff'){
        $table = 'staff';
        $name_field = 'full_name';
    } elseif($role == 'supplier'){
        $table = 'supplier';
        $name_field = 'company_name';
    } else {
        die("Invalid role selected.");
    }

    $query = "SELECT * FROM $table WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        $_SESSION['role'] = $role;
        $_SESSION['name'] = $row[$name_field];
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Login failed. <a href='login.php'>Try again</a>";
    }
}
?>
