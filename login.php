<?php
session_start();
if(isset($_SESSION['role'])){
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>ddddddddddddddddddddddddddddddddddddddddddddddd
<html>
<head><title>Aniza Collection Login</title></head>
<body>
<h2>Login</h2>
<form method="POST" action="authenticate.php">
    <label>Username:</label>
    <input type="text" name="username" required><br><br>
    <label>Password:</label>
    <input type="password" name="password" required><br><br>
    <label>Role:</label>
    <select name="role" required>
        <option value="">--Select Role--</option>
        <option value="admin">Admin</option>
        <option value="staff">Staff</option>
        <option value="supplier">Supplier</option>
    </select><br><br>
    <button type="submit">Login</button>
</form>
</body>
</html>

