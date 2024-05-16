<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link href="../index.css" rel="stylesheet">
</head>
<body>
<?php

include "NavBar/NavBar.php";


?>

    <div class="flex flex-col items-center justify-center h-screen">
        <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl text-center font-bold text-gray-900 mb-4">Sign In</h2>
            <form class="flex flex-col" method="post">
                <input type="email"
                    class="bg-gray-100 text-gray-900 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
                    placeholder="Email address">
                <input type="password"
                    class="bg-gray-100 text-gray-900 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
                    placeholder="Password">
                <div class="flex items-center justify-between flex-wrap">

                    <p class="text-gray-900 mt-4"> Don't have an account? <a href="SignUp.php"
                            class="text-sm text-blue-500 -200 hover:underline mt-4">Signup</a></p>
                </div>
                <button type="submit"
                    class="bg-gradient-to-r from-indigo-500 to-blue-500 text-white font-bold py-2 px-4 rounded-md mt-4 hover:bg-indigo-600 hover:to-blue-600 transition ease-in-out duration-150">Sign In</button>
            </form>
        </div>
    </div>

</body>
</html>