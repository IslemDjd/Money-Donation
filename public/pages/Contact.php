<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="index.css" rel="stylesheet">
</head>
<body>
<?php

include "NavBar/NavBar.php";


?>

    <br><br>
    <div class="max-w-md mx-auto mb-16 mt-8 bg-white border-2 rounded-lg shadow-md p-6">
        <h2 class="text-2xl text-center font-bold text-gray-800 mb-4">Contact Form</h2>
    
        <form class="flex flex-col">
            <label for="fullname" class="block text-sm my-2 mx-2 font-medium text-gray-700">
                Full Name
            </label>
            <input type="text"
                id="fullname"
                class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
                placeholder="Full Name">

            <label for="projectname" class="block text-sm my-2 mx-2 font-medium text-gray-700">
                Email
            </label>
            <input type="email"
                id="email"
                class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
                placeholder="Email">


            <label for="message" class="block text-sm my-2 mx-2 font-medium text-gray-700">
                Your Message
            </label>
            <textarea name="message"
                id="message"
                class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
                placeholder="Message"></textarea>
    
            <button type="submit"
                class="bg-gradient-to-r from-indigo-500 to-blue-500 text-white font-bold py-2 px-4 rounded-md mt-4 hover:bg-indigo-600 hover:to-blue-600 transition ease-in-out duration-150">Submit</button>
        </form>
    </div>

    
</body>
</html>