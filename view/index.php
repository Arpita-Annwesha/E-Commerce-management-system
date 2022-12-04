<?php
include('../model/connect.php');
?>
<!DOCTYPE
html>
<html lang="en">
    <head>
        <title>E-Commerce Website</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <!-------------------bootstrap CSS link--------------------->
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <!-------------------font awesome link---------------------->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!----------------------------------CSS file-------------------- -->
        <link rel="stylesheet" href="../style1.css">
    </head>
    <body>
        <!------------------navbar--------------------------->
        <div class="container-fluid p-0">
            <!----------------first segment---------------------->
            <nav class="navbar navbar-expand-lg" style="background-color:rgb(182,171,254);">

>
                <div class="container-fluid">
                    <img src=".\images\logo.jfif" alt="" class="logo">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Products</a>
                        </li>   
                        <li class="nav-item">
                            <a class="nav-link" href="#">Register</a>
                        </li>   
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>   
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><<sup>1</sup></a>
                        </li>   
                        <li class="nav-item">
                            <a class="nav-link" href="#">Total Price: 100/-</a>
                        </li>   
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-dark" type="submit">Search</button>
                    </form>
                    </div>
                </div>
            </nav>

            <!-------------second segment------------>
            <nav class="navbar navbar-expand-lg navbar-dark text-dark bg-info">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link pe-3 fs-5 text-white" href="#"> Welcome Guest </a>
                    </li> 
                     <li class="nav-item">
                        <a class="nav-link fs-5 text-white" href="#">Login</a>
                    </li>
                </ul>
            </nav>

            <!-----------third segment-------------------->
            <div class="bg-light">
                <h3 class="text-center">E-Commerce Store</h3>
                <p class="text-center">No more bargain, the quality will not let you to.</p>
            </div>


            <!------------fourth segment--------------->
            <div class="row">
                <div class="col-md-10">
                    <!-------------products------------->
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <div class="card">
                                <img src=".\images\watch.jfif" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Smart Watch</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-info">View More</a>
                                    <a href="#" class="btn btn-warning">Add to Cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-2">
                            <div class="card">
                                <img src=".\images\airpods.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Air Buds</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-info">View More</a>
                                    <a href="#" class="btn btn-warning">Add to Cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-2">
                            <div class="card">
                                <img src=".\images\phone.jfif" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Smart Phone</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-info">View More</a>
                                    <a href="#" class="btn btn-warning">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4 mb-2">
                            <div class="card">
                                <img src=".\images\women dress.jfif" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Dressses</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-info">View More</a>
                                    <a href="#" class="btn btn-warning">Add to Cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-2">
                            <div class="card">
                                <img src=".\images\dress1.jfif" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Dressses</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-info">View More</a>
                                    <a href="#" class="btn btn-warning">Add to Cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-2">
                            <div class="card">
                                <img src=".\images\t-shirt.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Dressses</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-info">View More</a>
                                    <a href="#" class="btn btn-warning">Add to Cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-2">
                            <div class="card">
                                <img src=".\images\shirt.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Dressses</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-info">View More</a>
                                    <a href="#" class="btn btn-warning">Add to Cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-2">
                            <div class="card">
                                <img src=".\images\toaster.jfif" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Toaster</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-info">View More</a>
                                    <a href="#" class="btn btn-warning">Add to Cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-2">
                            <div class="card">
                                <img src=".\images\juicer.jfif" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Juicer</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-info">View More</a>
                                    <a href="#" class="btn btn-warning">Add to Cart</a>
                                </div>
                            </div>
                        </div>

                        
                        
                    </div>
                </div>


                <!--------------side navbar------------>
                <div class="col-md-2 p-0 bg-secondary">


                    <!--------brands to be displayed------------>
                    <ul class="navbar-nav me-auto text-center">
                        <li class="nav-item bg-info">
                            <a href="#" class="nav-link text-light"><h4>Delivery Brands</h4></a>
                        </li>
                        <?php
                        $select_brands = "Select * from `brands`";
                        $result_brands = mysqli_query($con,$select_brands);
                        while($row_data = mysqli_fetch_assoc($result_brands)){
                            $brand_title = $row_data['brand_title'];
                            $brand_id = $row_data['brand_id'];
                            echo "<li class='nav-item'>
                            <a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a>
                        </li>";
                        }
                        ?>
                    </ul>


                    <!--------categories to be displayed------------>
                    <ul class="navbar-nav me-auto text-center">
                        <li class="nav-item bg-info">
                            <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
                        </li>

                        <?php
                        $select_category = "Select * from `categories`";
                        $result_category = mysqli_query($con,$select_category);
                        while($row_data = mysqli_fetch_assoc($result_category)){
                            $category_title = $row_data['category_title'];
                            $category_id = $row_data['category_id'];
                            echo "<li class='nav-item'>
                            <a href='index.php?category=$category_id' class='nav-link text-light'>$category_title</a>
                        </li>";
                        }
                        ?>
                    </ul>
                </div>
            </div>


            <!-------------last segment--------------------->
            <div class="bg-dark p-2 fs-5 text-center">
                <p class="text-light">All rights reserved @- Designed by Arpita Nath-2022</p>
            </div>

        </div>

    




    <!-----------------------bootstrap JS link---------------------->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>
</html>





<!-- start 14 -->