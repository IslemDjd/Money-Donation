<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Al Ihsan - Home</title>
</head>

<body class="bg-gray-100">
    <?php include "NavBar/NavBar.php"; ?>

    <!-- Hero Section -->
    <section class="bg-cover bg-center h-screen" style="background-image: url('icons/2.jpg');">
        <div class="flex items-center justify-center h-full bg-black bg-opacity-50">
            <div class="text-center text-white">
                <h1 class="text-5xl font-bold mb-4">Welcome to AL IHSAN</h1>
                <p class="text-2xl w-3/4 mx-auto mb-8">We Are dedicated to improving lives through a variety of projects
                    aimed at
                    addressing key issues in our communities. We believe in the power of collective action and provide a
                    platform for donors to contribute to meaningful causes</p>
                <a href="projects.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    View Projects
                </a>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-12 bg-blue-500 text-white text-center">
        <h2 class="text-4xl font-bold mb-4">Get Involved</h2>
        <p class="text-lg mb-8">Join us in making a difference. Every contribution counts.</p>
        <a href="signup.php" class="bg-white text-blue-500 font-bold py-2 px-4 rounded">Sign Up Now !</a>
    </section>

    <?php include "Footer/Footer.php"; ?>
</body>

</html>