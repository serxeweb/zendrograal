<?php include"send.php"?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Zendro Graal</title>
    <!-- Bootstrap CSS -->
    <link rel="icon" type="image/x-icon" href="./img/logo.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;500;700&display=swap" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!-- Custom CSS -->
    <style>
        .modal-content {
            background-color: #111111;
            box-shadow: 0 4px 6px rgba(255, 255, 255, 0.445);
            border: 1px solid white;
        }

        .card {
            background: none;
        }

        * {
            font-family: "Kanit", sans-serif;
            font-weight: 300;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background-color: #111111;
        }

        h1 {
            font-size: 46px;
        }

        a {
            font-family: "Kanit", sans-serif;
            font-weight: 400;
            /* Bold for headers */
            color: white;
            text-decoration: none;
        }

        #button {
            border: 1px solid whitesmoke;
            color: white;
            transition: transform 0.3s;
        }

        #button:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(240, 240, 240, 0.205);
        }

        #top-header {
            background-image: linear-gradient(rgba(0, 0, 0, 0.3),
                    rgba(0, 0, 0, 0.438)),
                url(img/topheader.jpg);
            background-size: cover;
            background-position: center;
            height: 100%;
        }

        #social-links {
            background: none;
            border: 1px solid white;
            border-radius: 5px;
            padding: 20px;
            transition: transform 0.3s;
        }

        #social-links:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(255, 255, 255, 0.336);
            text-shadow: 0 4px 8px rgba(255, 255, 255, 0.336);
            background-color: rgba(255, 255, 255, 0.336);
        }

        #social-links i {
            font-size: x-large;
        }

        #service-card {
            background: none;
            border: 1px solid white;
            height: 100%;
            padding: 20px;
            box-shadow: 0 4px 12px rgba(238, 238, 238, 0.329);
        }

        .carousel-inner {
            height: 100%;
            /* Set your desired height here */
            border-radius: 5px;
        }

        .carousel-inner img {
            height: 300px;
            width: auto;
            object-fit: cover;
        }

        nav {
            background: none;
            margin-bottom: -10%;
        }

        @media (min-width: 320px) and (max-width: 767px) {
            p {
                font-size: small;
            }

            h1 {
                font-size: 36px;
            }

            h2 {
                font-size: 30px;
            }

            #front-img {
                width: 75%;
            }

            #top-header {
                background-image: linear-gradient(rgba(0, 0, 0, 0.3),
                        rgba(0, 0, 0, 0.438)),
                    url(img/mobile2.jpg);
                background-size: cover;
                height: 100;
            }

            nav {
                background: #111111;
                margin-bottom: -23%;
                border-bottom: 2px solid white;
                box-shadow: 0 4px 12px rgba(238, 238, 238, 0.438);
                border-bottom-left-radius: 10px;
                border-bottom-right-radius: 10px;
                position: static;
                top: 0;
                z-index: 1000;
            }
        }

        @media (min-width: 768px) and (max-width: 990px) {
            nav {
                background: #111111;
                margin-bottom: -13%;
                border-bottom: 2px solid white;
                box-shadow: 0 4px 12px rgba(238, 238, 238, 0.438);
                border-bottom-left-radius: 10px;
                border-bottom-right-radius: 10px;
                position: fixed;
                top: 0;
                z-index: 1000;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#"><img src="img/logo.png" width="50" alt="" />Zendro Graal</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#top-header">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#about">About<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="#service-header">Service <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="btn " id="button" href="#contactus">Contact <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid" id="top-header">
        <br /><br /><br />
        <br /><br /><br />
        <div class="container mb-5 mt-5">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-light" style="margin-top: 20%">
                        Welcome to my Website.
                    </h1>
                    <h2 class="text-light">I'm <b>Zendro</b> from Graal Classic.</h2>
                    <p class="text-light">
                        This website is created by:
                        <a href="https://serxeweb.github.io/serxegraalweb/" class="text-light">Serxe Graal</a>
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="card border-0" style="background: none">
                        <center>
                            <img src="img/logo.png" id="front-img" class="border-0" width="75%" height="100%" onclick="changeImage()" alt="Logo" />
                            <p class="text-light">Tap to change</p>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br />

    <div class="container mt-5 mb-3 py-5" id="about">
        <h2 class="text-light"><u>About</u></h2>
        <p></p>
        <div class="row">
            <div class="col-md-6 mt-3">
                <div class="card border-0 text-center" style="background: none">
                    <img src="img/about.jpg" class="card-img" width="80%" style="border-radius: 5px;" />
                </div>
            </div>
            <div class="col-md-6 mt-3 mb-3">
                <h3 class="text-light">Zendro Graal</h3>
                <p class="text-light">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos,
                    laudantium consequuntur pariatur beatae velit enim incidunt vel
                    delectus error deleniti consequatur reiciendis eligendi consectetur
                    maiores dignissimos, quo, dolorum doloremque tempore?
                </p>
                <div class="row ml-1 d-flex">
                    <button id="button" class="btn" data-toggle="modal" data-target="#guildModal">
                        Guild
                    </button>

                    <button id="button" class="btn ml-2" data-toggle="modal" data-target="#socialModal">
                        Social Media
                    </button>
                </div>


                <div id="carouselExampleIndicators" class="carousel slide mt-3" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/p1.jpg" class="d-block w-100" alt="First slide" />
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First Slide</h5>
                                <p>First slide description.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/p2.jpg" class="d-block w-100" alt="Second slide" />
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second Slide</h5>
                                <p>Second slide description.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/p3.jpg" class="d-block w-100" alt="Third slide" />

                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third Slide</h5>
                                <p>Third slide description.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/profile.jpg" class="d-block w-100" alt="Third slide" />

                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third Slide</h5>
                                <p>Third slide description.</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <br />

    <div class="container-fluid py-5" id="service-header">
        <div class="container mt-3 mb-3">
            <h2 class="text-light"><u>Service</u></h2>
            <p></p>
            <div class="row">
                <div class="col-md-6 mt-2">
                    <div class="card" id="service-card">
                        <p class="text-light">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga
                            dignissimos eius nisi corrupti dolor facere architecto beatae
                            odit asperiores iusto sequi, dicta qui? Porro ut odit quam
                            blanditiis unde assumenda!
                        </p>
                    </div>
                </div>
                <div class="col-md-6 mt-2">
                    <div class="card" id="service-card">
                        <p class="text-light">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Voluptates repellendus fugit voluptatem voluptatibus placeat
                            ipsum libero tenetur rerum molestiae molestias distinctio
                            numquam vel, laboriosam saepe nemo. Exercitationem laudantium
                            cupiditate ducimus?
                        </p>
                    </div>
                </div>
            </div>
            <h2 class="text-light mt-5"><u>Usage</u></h2>
            <p></p>
            <div class="row">
                <div class="col-md-4 mt-2 text-center">
                    <div class="card p-3" id="social-links">
                        <i class="fas fa-user d-block text-light fa-3x"></i>
                        <p class="text-light mt-2">Personal</p>
                    </div>
                </div>
                <div class="col-md-4 mt-2 text-center">
                    <div class="card  p-3" id="social-links">
                        <i class="fas fa-flag d-block text-light fa-3x"></i>
                        <p class="text-light mt-2">Guild | Group</p>
                    </div>
                </div>

                <div class="col-md-4 mt-2 text-center">
                    <div class="card  p-3" id="social-links">
                        <i class="fas fa-list d-block text-light fa-3x"></i>
                        <p class="text-light mt-2">Others</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br />
    <div class="conatiner mt-3 mb-3">
        <h2 class="text-center text-light">NOTE:</h2>
        <p class="text-light text-center">
            This website serves for gaming-related purposes only.
        </p>
        <p class="text-center text-light">
            The content of this website is intended for selling and gaming purposes
            only.
        </p>
    </div>
    <br />
    <div class="container mt-5">
        <h2 class="text-center text-light "><u>Contact Us</u></h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <img src="img/contact.jpg" width="80%" style="border-radius: 50%;">
                </div>
            </div>
            <div class="col-md-6">
                <form action="send.php" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label text-light">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label text-light">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label text-light">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn" id="button">Send</button>
                </form>
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid">
        <footer class="text-white mt-5 py-5" id="contactus">
            <div class="container py-4">
                <div class="row">
                    <div class="col-md-4">
                        <h5>About Us</h5>
                        <p></p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
                            quis lorem ut libero malesuada feugiat.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <center><img src="img/logo.png" width="60%" /></center>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h5>Contact</h5>
                        <p>
                            <strong>Email:</strong> secrethelperincoding@gmail.com<br />
                            <strong>IGN:</strong> Zendro
                        </p>
                        <div>
                            <a href="#" class="text-white mr-3"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="text-white mr-3"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-white mr-3"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-white"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-2">
                <div class="container text-center">
                    <small>&copy; 2024 Zendro Graal. All rights reserved.</small>
                </div>
            </div>
        </footer>
    </div>


    <div class="modal fade" id="guildModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title text-light" id="exampleModalLabel">
                        Guild
                    </h5>
                </div>
                <div class="modal-body text-light text-center">Not in a guild.</div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn" id="button" style="border: 1px solid rgb(255, 255, 255); color: white" data-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="socialModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="border-bottom: 1px solid white;">
                    <h5 class="modal-title text-light" id="exampleModalLabel">
                        Social Media Links
                    </h5>
                </div>
                <div class="modal-body text-light d-block text-center">
                    <h5>LinkedIn <i class="fab fa-linkedin"></i></h5>
                    <a href="#" class="nav-link">NO LINK PROVIDED</a>
                    <hr />
                    <h5>Twitter | X <i class="fab fa-twitter"></i></h5>
                    <a href="#" class="nav-link">NO LINK PROVIDED</a>
                    <hr />
                    <h5>Instagram <i class="fab fa-instagram"></i></h5>
                    <a href="#" class="nav-link">NO LINK PROVIDED</a>
                    <hr />
                    <h5>Facebook <i class="fab fa-facebook"></i></h5>
                    <a href="#" class="nav-link">NO LINK PROVIDED</a>

                </div>

                <div class="modal-footer border-0">
                    <button type="button" class="btn" id="button" style="border: 1px solid rgb(255, 255, 255); color: white" data-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function changeImage() {
            var img = document.getElementById("front-img");
            if (img.src.includes("logo.png")) {
                img.src = "img/logo2.png"; // Replace with your new image path
            } else {
                img.src = "img/logo.png"; // Original image path
            }
        }
    </script>
    

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>