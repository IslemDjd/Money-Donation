<?php 
//session_start();
// if(!isset($_GET['p']) || !isset($_GET['v']) || !isset($_GET['projet']))
// {
//     header('Location:projects.php');
// }

// if(empty($_GET['p']) || empty($_GET['v']) || empty($_GET['projet']))
// {
//     echo "<script> alert('ffdfsrtrds')</script>";
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Donnation</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
   
    <div class="max-w-md mx-auto mt-8 bg-white border-2 rounded-lg shadow-md p-6">
        <h2 class="text-2xl text-center font-bold text-gray-800 mb-4">Make Donnation</h2>
    
        <form class="flex flex-col" method="POST">
            <!-- Project Name -->
            <label for="projectname" class="block text-sm my-2 mx-2 font-medium text-gray-700">
                Project Name
            </label>
            <input type="text"
            name="projectname"
            id="projectname"
            
            required
            value="<?= $_GET['projet']?>"
            disabled
            class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-2 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
            >
            <!-- Full Name -->
            <label for="fullname" class="block text-sm my-2 mx-2 font-medium text-gray-700">
                Full Name
            </label>
            <input type="text"
            name="fullname"
            id="fullname"
            required
            class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-2 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
            placeholder="Full Name">
            <!-- Full Name -->
            <label for="fullname" class="block text-sm my-2 mx-2 font-medium text-gray-700">
                Full Name
            </label>
            <input type="text"
            name="fullname"
            id="fullname"
            required
            class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-2 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
            placeholder="Full Name">

            <!-- Email  -->
            <label for="email" class="block text-sm my-2 mx-2 font-medium text-gray-700">
                Email
            </label>
            <input type="email"
            id="email"
            name="email"
            required
            class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-2 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
            placeholder="Email">

            <!-- Donnation Type -->
            <label for="donnationType" class="block text-sm my-2 mx-2 font-medium text-gray-700">
                Donnation Type
            </label>
            <select name="donnationType" required id="donnationType" class=" w-full p-2 rounded-md border border-gray-300 bg-white text-sm text-gray-700 shadow-sm" required>
                <option value="" selected disabled>Donnation Type</option>
                <option value="donnator" >Penctuel Donnation</option>
                <option value="beneficiary" >Mensuel Donnation</option>
            </select>

            <!-- Amount -->
            <label for="amount" class="block text-sm my-2 mx-2 font-medium text-gray-700">
                Amount
            </label>
            <input type="text"
            name="amount"
            id="amount"
            required
            class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-2 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
            placeholder="Amount">

            <!-- Paiement Mode -->
            <label for="donnationType" class="block text-sm my-2 mx-2 font-medium text-gray-700">
                Paiement Mode
            </label>
            <select name="donnationType" required id="donnationType" class=" w-full p-2 rounded-md border border-gray-300 bg-white text-sm text-gray-700 shadow-sm" required>
                <option value="" selected disabled>Select A Card</option>
                <option value="dahabiya" >Eddahabiya Card</option>
                <option value="societe" >Société Generale Card</option>
                <option value="cpa" >CPA Card</option>
                <option value="bna" >BNA Card</option>
            </select>

            <!-- Card Information -->
            <label for="" class="block text-sm mt-6 mb-2 mx-2 font-medium text-gray-700">
                Card Information
            </label>
            <input type="number"
            name="cardnumber"
            id="cardnumber"
            required
            class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
            placeholder="Card Number">

            <input type="text"
            name="expirationdate"
            id="expirationdate"
            required
            class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
            placeholder="Expiration Date  Ex : 12/24">
            
            <input type="number"
            name="ccv"
            id="ccv"
            required
            class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
            placeholder="CCV">

            
            
    
            <button type="submit"
                class="bg-gradient-to-r from-indigo-500 to-blue-500 text-white font-bold py-2 px-4 rounded-md mt-4 hover:bg-indigo-600 hover:to-blue-600 transition ease-in-out duration-150">Confirm</button>
        </form>
    </div>
    
</body>
</html>