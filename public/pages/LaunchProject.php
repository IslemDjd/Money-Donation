<?php 
// session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Launch Project</title>
    <!-- <link rel="stylesheet" href="index.css"> -->
</head>
<body>
    <div class=" w-full sm:w-3/5  mx-auto mt-16 bg-white border-2 rounded-lg shadow-md p-6">
        <h2 class="text-2xl text-center font-bold text-gray-800 mb-4">Launch Project</h2>
    
        <form class="flex flex-col" method="POST">
            <!-- Project Name -->
            <label for="nomprojet" class="block text-sm my-2 mx-2 font-medium text-gray-700">
                Project Name
            </label>
            <input type="text"
            name="nomprojet"
            id="nomprojet"
            required
            class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-2 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
            placeholder="Project Name">

            <!-- Decription  -->
            <label for="description" class="block text-sm my-2 mx-2 font-medium text-gray-700">
                Project Description
            </label>
            <textarea 
                name="description"
                id="description"
                required
                class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
                placeholder="Project Description"></textarea>

            

            <!-- Amount -->
            <label for="objectif" class="block text-sm my-2 mx-2 font-medium text-gray-700">
                Objectif (En DZD)
            </label>
            <input type="number"
            name="objectif"
            id="objectif"
            required
            class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-2 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
            placeholder="Objectif Amount">

            <!-- Beneficiaries Name -->
            <label for="beneficiaryname" class="block text-sm my-2 mx-2 font-medium text-gray-700">
                Beneficiary Full Name
            </label>
            <input type="text"
            name="beneficiaryname"
            id="beneficiaryname"
            required
            class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-2 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
            placeholder="Beneficiary Full name">

            <!-- Beneficiary Email  -->
            <label for="beneficiaryemail" class="block text-sm my-2 mx-2 font-medium text-gray-700">
                Beneficiary Email
            </label>
            <input type="email"
            id="beneficiaryemail"
            name="beneficiaryemail"
            required
            class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-2 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
            placeholder="Beneficiary Email">
            

            <!-- Project Picture -->
            <label for="picture" class="block text-sm my-2 mx-2 font-medium text-gray-700">
                Project Picture
            </label>
            <input type="file"
            name="picture"
            id="picture"
            required
            class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-2 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
            placeholder="Project Picture">

            
            <button type="submit"
            class="bg-gradient-to-r from-indigo-500 to-blue-500 text-white font-bold py-2 px-4 rounded-md mt-4 hover:bg-indigo-600 hover:to-blue-600 transition ease-in-out duration-150">Launch Project</button>
        </form>
    </div>
    <br><br><br><br><br>
</body>
</html>