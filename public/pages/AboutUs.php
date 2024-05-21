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
    <link rel="stylesheet" href="sidebar/css/bootstrap.min.css">
</head>

<body>
    <?php include "NavBar/NavBar.php"; ?>
    <section class="py-5">
        <div class="container">
            <div class="row gx-4 align-items-center justify-content-between">
                <div class="col-md-5 order-2 order-md-1">
                    <div class="mt-5 mt-md-0">
                        <h2 class="display-5 fw-bold">About Us</h2>
                        <p class="lead">
                            Welcome to Al Ihsan, a beacon of hope and compassion in the world of philanthropy. At Al
                            Ihsan, we believe in the power of collective effort and the profound impact of generosity.
                            Our platform is dedicated to bridging the gap between those in need and those willing to
                            help, providing a seamless and transparent way for you to make a difference..</p>
                    </div>
                </div>
                <div class="col-md-6 offset-md-1 order-1 order-md-2">
                    <div class="row gx-2 gx-lg-3">
                        <div class="col-6">
                            <div class="mb-2"><img loading="lazy" class="img-fluid rounded-3" src="icons/1.jpg"></div>
                        </div>
                        <div class="col-6">
                            <div class="mb-2"><img loading="lazy" class="img-fluid rounded-3" src="icons/2.jpg"></div>
                        </div>
                        <div class="col-6">
                            <div class="mb-2"><img loading="lazy" class="img-fluid rounded-3" src="icons/3.jpg"></div>
                        </div>
                        <div class="col-6">
                            <div class="mb-2"><img loading="lazy" class="img-fluid rounded-3" src="icons/4.jpg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include "Footer/Footer.php"; ?>
</body>

</html>