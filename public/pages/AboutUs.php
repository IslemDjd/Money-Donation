<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php include "NavBar/NavBar.php";?>
    <h1 class="text-center text-2xl font-bold my-12">About Us</h1>
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                </div>
                <div class="flex flex-1 items-center justify-between sm:items-stretch sm:justify-between">
                    <div class="flex flex-shrink-0 items-center ">
                        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500"
                            alt="Your Company">
                    </div>
                    <div class=" sm:ml-6 sm:block hidden">
                        <div class="flex space-x-4">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <a href="index.php" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium"
                                aria-current="page">Home</a>
                            <a href="Projects.php"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Projects</a>
                            <a href="AboutUs.php"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">About
                                Us</a>
                            <a href="Contact.php"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Contact</a>
                        </div>
                    </div>
                </div>
                <div class="inset-y-0 right-0 flex items-center pr-2 static sm:inset-auto sm:ml-6 sm:pr-0">
    
                    <div class="relative ml-3">
                        <div>
                            <a href="SignIn.php" class="relative flex  text-sm text-white font-bold" id="user-menu-button"
                                aria-expanded="false" aria-haspopup="true">
                                Sign In
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</body>
</html>