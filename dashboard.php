<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="w-full max-w-sm bg-white p-6 rounded-lg shadow-lg text-center">
        <h2 class="text-2xl font-bold mb-4">Welcome to the Dashboard!</h2>
        <p class="mb-4">You are logged in successfully.</p>
        <a href="logout.php" class="bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded">Logout</a>
    </div>
</body>
</html>
