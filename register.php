<?php
include 'db.php';  // Include the database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "Registration successful. <a href='login.php'>Login</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="w-full max-w-sm bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-4 text-center">Register</h2>
        <form method="POST">
            <input name="username" placeholder="Username" class="w-full p-2 border rounded mb-4" required>
            <input name="email" type="email" placeholder="Email" class="w-full p-2 border rounded mb-4" required>
            <input name="password" type="password" placeholder="Password" class="w-full p-2 border rounded mb-4" required>
            <button class="w-full bg-blue-500 hover:bg-blue-700 text-white py-2 rounded">Register</button>
        </form>
        <p class="text-center mt-4">Already have an account? <a href="login.php" class="text-blue-500">Login</a></p>
    </div>
</body>
</html>
