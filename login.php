<?php
session_start();
if (isset($_SESSION['role'])) {
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aniza Collection | Login</title>
    <style>
        body {
            margin: 0;
            font-family: "Segoe UI", Tahoma, sans-serif;
            background: linear-gradient(135deg, #7a1f2b, #f6efe8);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-box {
            background-color: #fdf7f2;
            padding: 35px 40px;
            border-radius: 12px;
            width: 350px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }

        .login-box h2 {
            text-align: center;
            color: #7a1f2b;
            margin-bottom: 5px;
        }

        .login-box p {
            text-align: center;
            color: #555;
            font-size: 14px;
            margin-bottom: 25px;
        }

        label {
            font-weight: 600;
            color: #7a1f2b;
            font-size: 14px;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 18px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 14px;
        }

        input:focus, select:focus {
            outline: none;
            border-color: #7a1f2b;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #7a1f2b;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background-color: #5e1721;
        }

        .footer-text {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h2>Aniza Collection</h2>
    <p>Inventory Management System</p>

    <form method="POST" action="authenticate.php">
        <label>Username</label>
        <input type="text" name="username" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <label>Role</label>
        <select name="role" required>
            <option value="">-- Select Role --</option>
            <option value="admin">Admin</option>
            <option value="staff">Staff</option>
            <option value="supplier">Supplier</option>
        </select>

        <button type="submit">Login</button>
    </form>

    <div class="footer-text">
        © 2026 Aniza Collection
    </div>
</div>

</body>
</html>
