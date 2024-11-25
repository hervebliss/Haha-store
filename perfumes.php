<!DOCTYPE html>
<html lang="en">
<?php
require 'connection.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $product=$_POST['product'];
    $quantity=$_POST['quantity'];
 $sql="INSERT INTO cart (product,quantity)values('$product','$quantity')";

$res=mysqli_query($con,$sql) or die ("INSERT FAILED: " .mysqli_connect_error($con));
header('location:cart.php');
}

?>
<head>
    <meta charset="utf-8">
    <title>HaHa Store</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid top-bar bg-dark text-light px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="small text-light" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="small text-light" href="#">Career</a></li>
                    <li class="breadcrumb-item"><a class="small text-light" href="#">Terms</a></li>
                    <li class="breadcrumb-item"><a class="small text-light" href="#">Privacy</a></li>
                </ol>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small>Follow us:</small>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn-lg-square text-primary border-end rounded-0" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn-lg-square text-primary border-end rounded-0" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn-lg-square text-primary border-end rounded-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn-lg-square text-primary pe-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="text-primary m-0">HaHa Store</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link ">Home</a>
                <a href="wardrobe.php" class="nav-item nav-link">Ward-Robe</a>
                <a href="perfumes.php" class="nav-item nav-link active">Perfums</a>
                <a href="product.php" class="nav-item nav-link">Fast-Food</a>
                <a href="accessories.php" class="nav-item nav-link">Accessories</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="registration.php" class="dropdown-item ">Registration</a>
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
            <div class=" d-none d-lg-flex">
                <div class="flex-shrink-0 btn-lg-square border border-light rounded-circle">
                    <i class="fa fa-phone text-primary"></i>
                </div>
                <div class="ps-3">
                    <small class="text-primary mb-0">Call Us</small>
                    <p class="text-light fs-5 mb-0">+250 787 587 492 </p>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center pt-5 pb-3">
            <h1 class="display-4 text-white animated slideInDown mb-3">Perfums</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="team.html">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Perfums</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Product Start -->
    <div class="container-xxl bg-light my-6 py-6 pt-0" style="margin: 12rem 0;">
        <div class="container">
            <div class="bg-primary text-light rounded-bottom p-5 my-6 mt-0 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <h1 class="display-4 text-light mb-0">HaHa store</h1>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <div class="d-inline-flex align-items-center text-start">
                            <i class="fa fa-phone-alt fa-4x flex-shrink-0"></i>
                            <div class="ms-4">
                                <p class="fs-5 fw-bold mb-0">Call Us</p>
                                <p class="fs-1 fw-bold mb-0">+250 787 587 492</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="text-primary text-uppercase mb-2">// perfumes product</p>
                <h1 class="display-6 mb-4">Explore The Categories Of Our different perfumes</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                        <div class="text-center p-4">
                            <div class="d-inline-block border border-primary rounded-pill px-3 mb-3">25,000 Rwf</div>
                            <h3 class="mb-3">Eau de Toilette</h3>
                            <span>Ingredients: Eau de toilette is a lightly scented perfume that's usually made with alcohol, water, and various volatile oils. The perfume oil concentration in eau de toilette is typically between 5–15%, which is lower than other types of fragrances, so it doesn't last as long on the skin.  </span>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="img/product-1.jfif" alt="">
                            <div class="product-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i class="fa fa-eye text-primary"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                        <div class="text-center p-4">
                            <div class="d-inline-block border border-primary rounded-pill pt-1 px-3 mb-3">35,000 Rwf</div>
                            <h3 class="mb-3">Eau de Parfum (EDP)</h3>
                            <span>Ingredients:Alcohol: 70% alcohol, or 190 proof, is a common ingredient in EDP. The amount of alcohol in a fragrance determines its concentration. 
Essential oils: EDP typically contains 15–20% essential oils or other natural extracts. Synthetic aromatic ingredients: EDP may also contain synthetic aromatic ingredients.
 </span>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="img/prodcut-2.jfif" alt="">
                            <div class="product-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i class="fa fa-eye text-primary"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                        <div class="text-center p-4">
                            <div class="d-inline-block border border-primary rounded-pill pt-1 px-3 mb-3">65,000 Rwf</div>
                            <h4 class="mb-3">Eau de cologne (EDC)</h4>
                            <span>Ingredients: Alcohol: A base of 70–90% dilute ethanol 
Citrus oils: Lemon, orange, tangerine, bergamot, lime, grapefruit, blood orange, bitter orange, and neroli 
Herbal notes: Rosemary and lavender 
Light floral notes: Jasmine or neroli 
Other ingredients: Aromatic and orange blossom notes  </span>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="img/product-3.jfif" alt="">
                            <div class="product-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i class="fa fa-eye text-primary"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product End -->
  
    <! -- product calculator -->
    <form method="POST">
    <section id="calculator" class="container calculator">
        <h2 class="text-primary m-0">Product Cart</h2>
        <p>Add to cart by selecting a product and quantity.</p>
        
        <label for="productSelect">Select Product:</label>
        <select name="product" id="productSelect">
            <option >Select  </option>
            <option>Eau de Toilette- 25000rwf</option>
            <option>Eau de Parfum (EDP) - 35000rwf</option>
            <option>Eau de cologne (EDC)- 65000rwf</option>
        </select>
        
        <label for="quantity">Quantity:</label>
        <input name="quantity" id="quantity" min="1" value="1">
        
        <button class="btn btn-primary rounded-pill py-3 px-5" onclick="calculateCost()" type="Submit">Add to Cart</button>

       
    </section>
    <script>
        function showSection(sectionId) {
            const sections = document.querySelectorAll('section');
            sections.forEach(section => section.classList.remove('active'));
            document.getElementById(sectionId).classList.add('active');
        }

        function calculateCost() {
            const productPrice = document.getElementById('productSelect').value;
            const quantity = document.getElementById('quantity').value;
            const totalCost = productPrice * quantity;
            document.getElementById('totalCost').innerText = `Total Cost: ${totalCost}RWF`;
        }
    </script>
    </form>
    <! -- product calculator End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer my-6 mb-0 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Office Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>NYStreet, MUSANZE, RWANDA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+250 787 587 492</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>ug@ines.ac.rw</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="wardrobe.php">Ward-Robe</a>
                    <a class="btn btn-link" href="perfumes.php">Perfums</a>
                    <a class="btn btn-link" href="products.php">Fast-Food</a>
                    <a class="btn btn-link" href="accessories.php">accessories</a>
                    <a class="btn btn-link" href="contact.php">Contact Us</a>
                    <a class="btn btn-link" href="#">Terms & Condition</a>
                    <a class="btn btn-link" href="#">Support</a>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Photo Gallery</h4>
                    <div class="row g-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light rounded p-1" src="img/product-1.jfif" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light rounded p-1" src="img/about-2.jfif" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light rounded p-1" src="img/product-3.jfif" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light rounded p-1" src="img/carousel-1.jfif" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light rounded p-1" src="img/prodcut-2.jfif" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light rounded p-1" src="img/product-1.jfif" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright text-light py-4 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#">HaHa STORE</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                  
                    Designed By GROUP 4
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->x
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!--  Javascript -->
    <script src="js/main.js"></script>
</body>

</html>