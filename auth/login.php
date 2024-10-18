<?php
session_start();

// Jika pengguna sudah login, redirect ke halaman index.php
if (isset($_SESSION["username"])) {
    header("Location: index.php");
    exit();
}

// Menyimpan pesan error jika ada
$error_message = "";
if (isset($_SESSION['error'])) {
    $error_message = $_SESSION['error'];
    unset($_SESSION['error']); // Menghapus error setelah ditampilkan
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
        }

        form {
            background: rgba(255, 255, 255, 0.8);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        form h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .input-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .input-group label {
            display: block;
            color: #666;
            font-size: 14px;
        }

        .input-group input {
            width: 100%;
            padding: 12px;
            margin-top: 8px;
            border: 1px solid #ddd;
            border-radius: 10px;
            font-size: 16px;
            color: #333;
            transition: 0.3s;
        }

        .input-group input:focus {
            border-color: #a29bfe;
            outline: none;
            box-shadow: 0 4px 8px rgba(162, 155, 254, 0.3);
        }

        button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 10px;
            background: #6c5ce7;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        button:hover {
            background: #5a4ac7;
        }

        .error {
            color: red;
            background-color: #ffe5e5;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 15px;
            font-size: 14px;
        }

        .success {
            color: green;
            background-color: #e5ffea;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 15px;
            font-size: 14px;
        }

        @media (max-width: 768px) {
            form {
                padding: 30px;
            }
        }
    </style>
</head>
<body>
    <form action="auth.php" method="post">
        <h2>Login</h2>

        <?php if (!empty($error_message)): ?>
            <div class="error"><?= htmlspecialchars($error_message) ?></div>
        <?php endif; ?>

        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>
        </div>

        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
        </div>

        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>
