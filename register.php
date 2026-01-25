<?php
// 1. DATABASE CONNECTION
require 'db.php';
$message = "";

// 2. LOGIC: Handle the Registration
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if user already exists
    $checkSql = "SELECT id FROM users WHERE username = ?";
    $stmt = $pdo->prepare($checkSql);
    $stmt->execute([$username]);
    
    if ($stmt->fetch()) {
        $message = "<div style='color:red'>ERROR: Agent name already taken.</div>";
    } else {
        // HASH THE PASSWORD (The Shredder)
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // INSERT INTO VAULT
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
        $stmt = $pdo->prepare($sql);
        
        if ($stmt->execute([$username, $hashed_password])) {
            $message = "<div style='color:#00ff00'>MISSION ACCOMPLISHED.<br>New Agent Registered. <a href='login' style='color:yellow'>[ PROCEED TO LOGIN ]</a></div>";
        } else {
            $message = "<div style='color:red'>SYSTEM ERROR: Registration Failed.</div>";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register - Cyber Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <canvas id="matrix-rain"></canvas>

    <?php include 'navbar.php'; ?>

    <div class="container">
        <div class="card">
            <h1>NEW AGENT RECRUITMENT</h1>
            <p>Create your classified identity.</p>
            
            <?php echo $message; ?>

            <form method="POST">
                <label>Desired Username:</label><br>
                <input type="text" name="username" required style="background: #333; border: 1px solid #00ff00; color: white; padding: 10px; width: 50%;"><br><br>
                
                <label>Password:</label><br>
                <input type="password" name="password" required style="background: #333; border: 1px solid #00ff00; color: white; padding: 10px; width: 50%;"><br><br>
                
                <button type="submit">INITIALIZE AGENT</button>
            </form>
        </div>
    </div>

    <script src="matrix.js"></script>

</body>
</html>