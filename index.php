<!DOCTYPE html>
<html>
<head>
    <title>Cyber Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <canvas id="matrix-rain"></canvas>

    <?php include 'navbar.php'; ?>

    <div class="container">
        
        <div style="text-align: center; padding: 50px 0;">
            <h1 style="font-size: 50px;">WELCOME TO THE SYSTEM</h1>
            <h3>I am a Cybersecurity Student & Web Developer.</h3>
            <button onclick="alert('Access Granted!')">ENTER MAINFRAME</button>
        </div>

        <div class="card">
             <h2>Latest Status</h2>
             <p>System is online. Matrix background active.</p>
        </div>

        <div class="card">
            <h2>My Goal</h2>
            <p>To build a secure, database-driven web application and then learn how to penetration test it.</p>
        </div>

    </div> 
    
    <script src="matrix.js"></script>

</body>
</html>