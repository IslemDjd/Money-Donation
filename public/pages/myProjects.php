
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
   
    <div class="grid gap-6 w-full h-full p-4 mt-16 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3">
        <!-- Project Card -->

        <?php $get_projects=mysqli_query($connfig,"SELECT p.* , u.* FROM `projects` p JOIN `users` u ON p.id_user=u.id_user WHERE u.id_user='$id' order by p.date desc");
            if(mysqli_num_rows($get_projects) > 0)
            {
                while($row=mysqli_fetch_assoc($get_projects))
                 {
                    echo'
                    <div class="bg-white rounded-lg shadow-md relative">
                    <img class="w-full  sm:h-60 lg:h-80 object-cover rounded-t-lg" alt="Card Image" src="./pfp_project/'.$row['project_photo'].'">
                    <div class="p-4 ">
                    <h2 class="text-xl font-bold">Project : '.$row['project_name'].'</h2> 
                    <h3 class="text-lg font-semibold mt-3 ">Montant : <span class="text-green-600"> '.$row['Objectif'].'</span>DA</h3>
                    </div>
                    </div>';
                }
           }
       ?>
        
       
    </div>
</body>
</html>
