<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!--font aswsome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="../style.css">
    <style>
        .admin_img{
            width: 100px;
            object-fit:contain;
        }
    </style>

</head>
<body>
        <!--navbar-->
        <div class="container-fluid p-0">
        <!--1 nav-->
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container-fluid">
                <img src="../img/logo.jpg" alt="" class="logo">  
                    <nav class="navbar navbar-expand-lg">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="" class="nav-link text-light">Welcome</a>
                            </li>
                        </ul>
                    </nav>
            </div>
        </nav>

        <!--2 nav-->
        <div class="bg-light">
            <h3 class="text-algin p-2 text-center">Manage Details </h3>
        </div>

        <!--3 nav-->
        <div class="row">
            <div class="col-md-12 bg-dark p-1 d-flex align-items-center">   
                <!-- 1st container-->
                <div class="p-3">
                    <a href="#"><img src="../img/user.jpg" alt="" class="admin_img"></a>
                    <p class="text-light">Admin Name</p>
                </div>    
                <!-- 2nd container-->
                <div class="button text-center">                
                    <button class="my-3"><a href="" class="nav-link text-dark bg-warning my-1"> Insert Product</a></button>
                    <button><a href="" class="nav-link text-dark bg-warning my-1">View Product</a></button>
                    <button><a href="index.php?insert_category" class="nav-link text-dark bg-warning my-1">Insert Categories</a></button>
                    <button><a href="" class="nav-link text-dark bg-warning my-1">View Categories</a></button>
                    <button><a href="index.php?insert_brand" class="nav-link text-dark bg-warning my-1">Insert Brands</a></button>
                    <button><a href="" class="nav-link text-dark bg-warning my-1">View Brands</a></button>
                    <button><a href="" class="nav-link text-dark bg-warning my-1">All Orders</a></button>
                    <button><a href="" class="nav-link text-dark bg-warning my-1">All Payments</a></button>
                    <button><a href="" class="nav-link text-dark bg-warning my-1">List users</a></button> 
                    <button><a href="" class="nav-link text-dark bg-warning my-1">Logout</a></button>
                </div>
        </div>

        <!-- 4 nav -->
        <div class="container">
        <?php
            if(isset($_GET['insert_category'])){
                include('insert_categories.php');
            }
            if(isset($_GET['insert_brand'])){
                include('insert_brands.php');
            }
        ?>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>