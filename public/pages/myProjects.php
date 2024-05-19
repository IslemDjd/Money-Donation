
<?php 
include_once "conndatabase.php";

//session_start();

$id=$_SESSION['id'];
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
   
    
    <div class="grid gap-6 p-4 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3">
        <!-- Project Card -->

        <?php $get_projects=mysqli_query($connfig,"SELECT p.* , u.* FROM `projects` p JOIN `users` u ON p.id_user=u.id_user WHERE u.id_user='$id' order by p.date desc");
            if(mysqli_num_rows($get_projects) > 0)
            {
                while($row=mysqli_fetch_assoc($get_projects))
                 {
                    echo'
                    <div class="bg-white rounded-lg shadow-md">
                    <img class="w-full h-60 object-cover rounded-t-lg" alt="Card Image" src="./pfp_project/'.$row['project_photo'].'">
                    <div class="p-4">
                    <h2 class="text-xl font-semibold">'.$row['project_name'].'</h2> 
                    '.$row['Objectif'].' '.$row['firstname'].' '.$row['lastname'].'
                    <p class="text-gray-600">'.$row['Description'].'</p>
                    <div class="flex justify-end items-center mt-4">';
                    if(isset($_SESSION['email']))
                    {

                        if($_SESSION['role']=="donnator")
                        {
                            echo'
                            <a href="DashboardDonnateur.php?p=Donnation&projet='.$row['project_name'].'&v='.$row['id_projects'].'"><button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-400">Donate</button></a>';
                        }
                    }else
                    {
                       echo' <a href="SignIn.php"><button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-400">Donate</button></a>';
                    }
                    echo'
                    </div>
                    </div>
                    </div>';
                }
           }
       ?>
        
       
    </div>
</body>
</html>
