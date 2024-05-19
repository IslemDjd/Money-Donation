<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <?php include "NavBar/NavBar.php";?>
    <h1 class="text-center text-2xl font-bold my-12">Projects</h1>
    <div class="grid gap-6 p-4 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3">
        <!-- Project Card -->
        <div class="bg-white rounded-lg shadow-md">
            <img class="w-full h-60 object-cover rounded-t-lg" alt="Card Image" src="https://via.placeholder.com/150">
            <div class="p-4">
                <h2 class="text-xl font-semibold">Project Title</h2>
                <p class="text-gray-600">Project Description</p>
                <div class="flex justify-end items-center mt-4">
                    <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-400">Donate</button>
                </div>
            </div>
        </div>
        
       
    </div>
</body>
</html>
