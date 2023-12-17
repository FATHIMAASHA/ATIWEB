<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    // If not logged in, redirect to login.php
    header("Location: login.php");
    exit();
}

// User is logged in, retrieve email address
$email = $_SESSION['email'];

// Display the dashboard with the lecturer's email address
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lecturer Dashboard</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .dashboard {
            width: 400px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h2 {
            color: #4285f4;
        }
        p {
            color: #333;
            text-align: left; /* Align the text to the left */
        }
        
        a.button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4285f4;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        a.button:hover {
            background-color: #3454a1;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <h2>Welcome to the Advanced Technological Institute - Batticaloa</h2>
        <!-- Add additional dashboard content as needed -->
        <p>
            Address – Main Street, KovilKulam, Arayampathi, Batticaloa<br>
            Telephone – 065-2247519/ 065-2247470<br>
            E-mail – atibatticaloa@sliate.ac.lk<br>
            Opening Hours: 8.30 am – 4.15 pm<br>
            Holidays: Closed
        </p>

        <!-- Add a logout link -->
        <p><a href="logout.php" class="button">Logout</a></p>
    </div>
</body>
</html>
