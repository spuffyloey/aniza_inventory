<?php
session_start();
if(!isset($_SESSION['role'])){
    header("Location: login.php");
    exit();
}
$role = $_SESSION['role'];
$name = $_SESSION['name'];
?>
<!DOCTYPE html>
<html>
<head><title>Dashboard - <?= ucfirst($role) ?></title></head>
<body>
    <h2>Welcome, <?= $name ?> (Role: <?= ucfirst($role) ?>)</h2>
    <a href="logout.php">Logout</a><hr>
    <?php
    if($role == 'admin'){
        echo "<h3>Admin Modules:</h3><ul>
                <li>Manage Staff</li>
                <li>Manage Product</li>
                <li>Manage Stock</li>
                <li>Manage Purchase Order</li>
                <li>Manage Delivery</li>
              </ul>";
    } elseif($role == 'staff'){
        echo "<h3>Staff Modules:</h3><ul>
                <li>Manage Product</li>
                <li>View Stock</li>
              </ul>";
    } elseif($role == 'supplier'){
        echo "<h3>Supplier Modules:</h3><ul>
                <li>Manage Purchase Order</li>
                <li>Manage Delivery</li>
              </ul>";
    }
    ?>
</body>
</html>
