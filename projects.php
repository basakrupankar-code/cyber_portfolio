<!DOCTYPE html>
<html>
<head>
    <title>Projects - Cyber Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <canvas id="matrix-rain"></canvas>

    <?php include 'navbar.php'; ?>

    <div class="container">
        
        <h1 style="text-align: center; margin-bottom: 40px;">MISSION LOG & PROJECTS</h1>

        <div class="card">
            <h2 style="color: #00ff00;">Project: Secure Auth System</h2>
            <p><strong>Status:</strong> <span style="color:yellow">COMPLETED</span></p>
            <p><strong>Description:</strong> A full-stack PHP application with MySQL database integration. Implemented secure password hashing (bcrypt), session management, and protection against basic SQL Injection.</p>
            <p><strong>Tech Stack:</strong> PHP, MySQL, Apache, CSS3.</p>
        </div>

        <div class="card">
            <h2 style="color: #00ff00;">CTF Challenge: OverTheWire Bandit</h2>
            <p><strong>Status:</strong> <span style="color:cyan">IN PROGRESS</span></p>
            <p><strong>Current Level:</strong> Level 20</p>
            <p><strong>Latest Flag Captured:</strong></p>
            <div style="background: black; padding: 10px; border: 1px dashed green; font-family: monospace;">
                7x16WNeHIi5YkIhWsfFIqoognUTyj9Q4
            </div>
            <br>
            <button onclick="window.location.href='https://overthewire.org/wargames/bandit/'">RESUME MISSION</button>
        </div>
        <div class="project-card" style="border: 1px solid #00ff00; background-color: black; padding: 15px; margin-top: 20px; font-family: 'Courier New', monospace;">
            <h3 style="color: #00ff00; margin-top: 0;">Tool: Network Scanner</h3>
            <p style="color: #00ff00;">Status: <span style="color: #00ffff; font-weight: bold;">COMPLETED</span></p>
            <p style="color: white;">Description: A Python-based ARP scanner built with Scapy. Discovers active devices on local networks.</p>
            <div style="margin-top: 15px;">
            <a href="https://github.com/basakrupankar-code/network_scanner" target="_blank" style="background-color: #00ff00; color: black; padding: 10px 20px; text-decoration: none; font-weight: bold; display: inline-block; border: 1px solid #00ff00;">VIEW SOURCE CODE</a>
            </div>

        </div>
       
    </div>

    <script src="matrix.js"></script>

</body>
</html>