```php
<?php
session_start();

// Admin credentials
$admin_username = "muna";
$admin_password = "muna123";

// Login
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $admin_username && $password === $admin_password) {
        session_regenerate_id(true);
        $_SESSION['admin'] = $username;

        header("Location: admin.php");
        exit();
    } else {
        $error = "Invalid username or password!";
    }
}

// Logout
if (isset($_GET['logout'])) {
    $_SESSION = [];
    session_destroy();

    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muna Admin Login</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #fff5f8;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .login-box {
            background: white;
            padding: 35px;
            width: 320px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            text-align: center;
        }

        h2 {
            color: #d63384;
        }

        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #d63384;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background: #a61e62;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>

<div class="login-box">

    <h2>MUNA ADMIN</h2>
    <p>Login to your dashboard</p>

    <?php if (isset($error)) { ?>
        <p class="error"><?php echo $error; ?></p>
    <?php } ?>

    <form method="POST" action="login.php">
        <input type="text" name="username" placeholder="Username" required>

        <input type="password" name="password" placeholder="Password" required>

        <button type="submit" name="login">Login</button>
    </form>

</div>

</body>
</html>
```