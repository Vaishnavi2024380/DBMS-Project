<?php  
session_start();  
require_once __DIR__ . '/config/db.php';  
  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
  
    $email = strtolower(trim($_POST['email']));  
    $password = trim($_POST['password']);  
    $role = strtolower(trim($_POST['role']));  
  
    if ($email === '' || $password === '' || $role === '') {  
        echo "<script>alert('⚠️ Please fill all fields!');</script>";  
    } else {  
  
        $stmt = mysqli_prepare($conn,  
            "SELECT id, name, email, password, role   
             FROM users   
             WHERE email = ? AND role = ?"  
        );  
        mysqli_stmt_bind_param($stmt, 'ss', $email, $role);  
        mysqli_stmt_execute($stmt);  
        $result = mysqli_stmt_get_result($stmt);  
  
        if ($row = mysqli_fetch_assoc($result)) {  
  
            if (password_verify($password, $row['password'])) {  
  
                // Store session  
                $_SESSION['user_id'] = $row['id'];  
                $_SESSION['name'] = $row['name'];  
                $_SESSION['role'] = $row['role'];  
                $_SESSION['email'] = $row['email'];  
  
                // ⭐ UPDATE LAST LOGIN  
                mysqli_query($conn, "UPDATE users SET last_login = NOW() WHERE id = {$row['id']}");  
  
                // Redirect  
                if ($row['role'] === 'admin') header("Location: admin/dashboard.php");  
                elseif ($row['role'] === 'staff') header("Location: staff/home.php");  
                else header("Location: customer/home.php");  
  
                exit;  
  
            } else {  
                echo "<script>alert('❌ Incorrect Password');</script>";  
            }  
        } else {  
            echo "<script>alert('❌ User not found');</script>";  
        }  
  
        mysqli_stmt_close($stmt);  
    }  
}  
?>  
<!DOCTYPE html>  
<html lang="en">  
<head>  
<meta charset="UTF-8">  
<title>Login | Restaurant System</title>  
  
<style>  
    * {  
        margin: 0;  
        padding: 0;  
        font-family: 'Poppins', sans-serif;  
        box-sizing: border-box;  
    }  
  
    body {  
        background: #f1f1f1;  
        height: 100vh;  
        overflow: hidden;  
        display: flex;  
        justify-content: center;  
        align-items: center;  
    }  
  
    .top-header {  
        background: #b71c1c;  
        height: 70px;  
        width: 100%;  
        color: white;  
        font-size: 20px;  
        font-weight: 600;  
        padding-left: 30px;  
        display: flex;  
        align-items: center;  
        position: fixed;  
        top: 0;  
        left: 0;  
    }  
  
    .container {  
        width: 850px;  
        height: 520px;  
        background: #fff;  
        border-radius: 28px;  
        overflow: hidden;  
        display: flex;  
        box-shadow: 0 12px 25px rgba(0,0,0,0.18);  
    }  
  
    .left {  
        width: 50%;  
        padding: 45px;  
        display: flex;  
        flex-direction: column;  
        justify-content: center;  
    }  
  
    .left h1 {  
        color: #b71c1c;  
        font-size: 26px;  
        margin-bottom: 5px;  
        font-weight: 700;  
    }  
  
    .left p {  
        color: #777;  
        font-size: 14px;  
        margin-bottom: 20px;  
    }  
  
    select,  
    input {  
        width: 100%;  
        padding: 12px;  
        margin-bottom: 15px;  
        border-radius: 12px;  
        border: 1px solid #ccc;  
        font-size: 15px;  
    }  
  
    select:focus,  
    input:focus {  
        border-color: #b71c1c;  
        outline: none;  
        box-shadow: 0 0 5px rgba(183,28,28,0.4);  
    }  
  
    .btn {  
        width: 100%;  
        padding: 12px;  
        background: #b71c1c;  
        border: none;  
        border-radius: 12px;  
        color: white;  
        font-size: 15px;  
        font-weight: 600;  
        cursor: pointer;  
        margin-top: 5px;  
        transition: .2s;  
    }  
    .btn:hover {  
        background: #8d1414;  
    }  
  
    .login-link {  
        margin-top: 12px;  
        font-size: 14px;  
    }  
    .login-link a {  
        color: #b71c1c;  
        font-weight: 600;  
        text-decoration: none;  
    }  
  
    .right {  
        width: 50%;  
        background: url('assets/images/menu/food-bg.jpg') center no-repeat;  
        background-size: cover;  
    }  
</style>  
</head>  
  
<body>  
  
<div class="top-header">🍽 Restaurant Management System</div>  
  
<div class="container">  
  
    <div class="left">  
        <h1>Welcome Back 👋</h1>  
        <p>Login to continue</p>  
  
        <form method="POST">  
  
            <select name="role" required>  
                <option value="">Select Role</option>  
                <option value="admin">Admin</option>  
                <option value="staff">Staff</option>  
                <option value="customer">Customer</option>  
            </select>  
  
            <input type="email" name="email" placeholder="Email Address" required>  
            <input type="password" name="password" placeholder="Enter Password" required>  
  
            <button type="submit" class="btn">LOGIN</button>  
        </form>  
  
        <div class="login-link">  
            New user? <a href="/RESTAURANT_MS/customer/register.php">Create account</a>  
        </div>  
    </div>  
  
    <div class="right"></div>  
  
</div>  
  
</body>  
</html>