<?php
// 1. LOGIC AT THE TOP
session_start();
require 'db.php'; 
$message = "";

if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    session_destroy();
    header("Location: login"); // Updated to redirect to login
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
    } else {
        $message = "<div style='color:red'>ACCESS DENIED</div>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login - Cyber Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <canvas id="matrix-rain"></canvas>

    <?php include 'navbar.php'; ?>

    <div class="container">
        <?php if (isset($_SESSION['username'])): ?>
        
            <div class="card" style="border-color: #00ff00;">
                <h1 style="color: #00ff00;">COMMAND CENTER</h1>
                <p>Welcome, Agent <strong><?php echo $_SESSION['username']; ?></strong>.</p>
                <p>Status: <span style="background:#00ff00; color:black; padding: 2px 5px;">ONLINE</span></p>
                <br>
                <a href="login?action=logout"><button style="background:red; color:white;">LOGOUT</button></a>
            </div>

        <?php else: ?>

            <div class="card">
                <h1>SECURE LOGIN</h1>
                <?php echo $message; ?>
                
                <form method="POST">
                    <label>Username:</label><br>
                    <input type="text" name="username" required style="background: #333; border: 1px solid #00ff00; color: white; padding: 10px; width: 50%;"><br><br>
                    
                    <label>Password:</label><br>
                    <input type="password" name="password" required style="background: #333; border: 1px solid #00ff00; color: white; padding: 10px; width: 50%;"><br><br>
                    
                    <button type="submit">AUTHENTICATE</button>
                </form>
            </div>

        <?php endif; ?>
    </div>
    
    <script src="matrix.js"></script>

</body>
</html>