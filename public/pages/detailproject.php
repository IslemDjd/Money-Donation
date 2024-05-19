<?php
include_once "conndatabase.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Details</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div class="w-11/12 mt-16 mx-auto p-4">
        <img class="w-60 h-60 object-cover mb-8 mx-auto" src="https://source.unsplash.com/1600x900/?donation" alt="">
        <h1 class="text-2xl mb-2 text-center font-bold">Project Name</h1>
        <p class="text-base text-center font-medium">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit,
            officiis!</p>
        <h2 class="text-xl mt-12 text-center font-bold">Objectif</h2>
        <p class="text-xl mt-6 text-center text-green-500 font-bold">1000 / 3000 DA</p>



        <table class="min-w-full leading-normal mt-12">
            <thead>
                <tr>
                    <th
                        class="px-2 py-2 bg-white border-b border-gray-200 text-gray-800 text-left text-sm uppercase font-normal">
                        N&deg;
                    </th>
                    <th
                        class="px-2 py-2 bg-white border-b border-gray-200 text-gray-800 text-left text-sm uppercase font-normal">
                        Donnator
                    </th>
                    <th
                        class="px-2 py-2 bg-white border-b border-gray-200 text-gray-800 text-left text-sm uppercase font-normal">
                        Type
                    </th>

                    <th
                        class="px-2 py-2 bg-white border-b border-gray-200 text-gray-800 text-left text-sm uppercase font-normal">
                        Created at
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php $get_donation = mysqli_query($connfig, "SELECT d.*, u.* FROM `donation` d JOIN `users` u ON d.id_user=u.id_user");
                if (mysqli_num_rows($get_donation) > 0) {
                    $i = 1;
                    while ($row = mysqli_fetch_assoc($get_donation)) {
                        echo '
                        <tr>
                        <td class="px-2 py-2 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">' . $i . '</p>
                        </td>
                        <td class="px-2 py-2 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">' . $row['firstname'] .' '. $row['lastname'] . '</p>
                        </td>
                        <td class="px-2 py-2 border-b border-gray-200 bg-white text-sm">
                        '.$row['donation_type'].'
                        </td>
                        <td class="px-2 py-2 border-b border-gray-200 bg-white text-sm">
                        '.$row['date_donation'].'
                        </td>
                        </tr>';
                        $i++;
                    }
                }
                ?>

            </tbody>
        </table>
    </div>
</body>

</html>