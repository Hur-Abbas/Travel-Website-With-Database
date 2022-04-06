<?php
include "db.php";

if (isset($_POST['submit'])) {
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['number']) && !empty($_POST['place']) && !empty($_POST['other'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $place = $_POST['place'];
        $other = $_POST['other'];

        $query = "INSERT INTO userinfo(Name,Email,Number,Place,Other) values('$name','$email','$number','$place','$other')";

        $run = mysqli_query($con, $query);

        if ($run) {
            echo " <div class='alert alert-success' role='alert'>
           form submitted succesfully
          </div>";
        } else {
            echo " <div class='alert alert-danger' role='alert'>
            form not submitted due to some error please wait
           </div>";
        }
    } else {
        echo " <div class='alert alert-danger' role='alert'>
        enter all data properly please
       </div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>HA Travel Website</title>
</head>

<body>

    <!-- Home Section & NavBar Start -->
    <section class="container-fluid homesection">
        <nav class="container pt-5 navbar navbar-expand-lg navbar-light bg-transparent">
            <div class="container-fluid">
                <a class="navbar-brand  logo-heading" href="#"><img class="logos" src="img/illustration.jpg"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active item1" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link item" href="#">Guide</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link item" href="#">Flights</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link item" href="#">About</a>
                        </li>

                    </ul>
                    <button class="d-flex header-button">
                        Contact Us
                    </button>
                </div>
            </div>
        </nav>
        <div class="row">
            <div class="col-md-6 col-sm-12 col-lg-6 col-xl-6 left-content">
                <div class="leftcontentdiv">
                    <h1>Travel to <br> your dream <br>destination!</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet qui ducimus distinctio ratione
                        consectetur mollitia fugiat quas hic, similique tenetur!</p>
                    <button class="leftcontentbutton">
                        Reserve Ticket
                    </button>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-6 col-xl-6 ">
                <img src="img/heroImg.jpg" alt="" class="hero-img">
            </div>
        </div>
    </section>
    <!-- Home Section & NavBar End -->

    <!-- second section start -->
    <section class="secondsection" id="secondsection">
        <div class="memorydiv">
            <h2 class=" text-center fw-bold">Create a memory <br> to remember!</h2>
            <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati laboriosam unde
                perferendis <br> voluptatum expedita rem.</p>
            <button class="memorybutton align-center">
                My Travel Logs
            </button>
        </div>
    </section>
    <!-- second section end -->

    <!-- Blog section Start -->
    <section class="blogsection" id="blogsection">
        <div class="row blog">
            <div class="col-md-12 col-sm-12 col-lg-4 col-xl-4 singleblogpost">
                <img src="img/blog.jpg" alt="">
                <hr>
                <h4>Lorem ipsum dolor sit.</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat, aperiam? Animi, adipisci
                        soluta.</p>
            </div>
            <div class="col-md-12 col-sm-12 col-lg-4 col-xl-4 singleblogpost">
                <img src="img/blog1.jpg" alt="">
                <hr>
                <h4>Lorem ipsum dolor sit.</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat, aperiam? Animi, adipisci
                        soluta.</p>
            </div>
            <div class="col-md-12 col-sm-12 col-lg-4 col-xl-4 singleblogpost">
                <img src="img/blog3.jpg" alt="">
                <hr>
                <h4>Lorem ipsum dolor sit.</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat, aperiam? Animi, adipisci
                        soluta.</p>
            </div>
            <div class="col-md-12 col-sm-12 col-lg-4 col-xl-4 singleblogpost singleblogpost1">
                <img src="img/blog3.jpg" alt="">
                <hr>
                <h4>Lorem ipsum dolor sit.</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat, aperiam? Animi, adipisci
                        soluta.</p>
            </div>
            <div class="col-md-12 col-sm-12 col-lg-4 col-xl-4 singleblogpost singleblogpost1">
                <img src="img/blog3.jpg" alt="">
                <hr>
                <h4>Lorem ipsum dolor sit.</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat, aperiam? Animi, adipisci
                        soluta.</p>
            </div>
            <div class="col-md-12 col-sm-12 col-lg-4 col-xl-4 singleblogpost singleblogpost1">
                <img src="img/blog3.jpg" alt="">
                <hr>
                <h4>Lorem ipsum dolor sit.</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat, aperiam? Animi, adipisci
                        soluta.</p>
            </div>
        </div>
    </section>
    <!-- Blog section End -->

    <!-- Area Section Start-->
    <section class="areasection" id="areasection">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 container">
                <div class="areacontenth1">
                    <h3>
                        Choose anywhere you did like to be!
                    </h3>
                </div>
                <div class="areacontent areacontent1">
                    <h5>Lorem ipsum dolor sit.</h5>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis facilis eaque pariatur voluptates, quo reiciendis minus. Nostrum, dolore! Enim expedita maiores molestiae esse at.</p>
                </div>
                <div class="areacontent">
                    <h5>Lorem ipsum dolor sit.</h5>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis facilis eaque pariatur voluptates, quo reiciendis minus. Nostrum, dolore! Enim expedita maiores molestiae esse at.</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <img src="img/blog.jpg" alt="" class="areaimg">
            </div>
        </div>
    </section>
    <!-- Area Section End-->

    <!-- Contact Section Start-->
    <div class="contactsection" id="contactsection">
        <h1 class="text-center">
            Contact Us
        </h1>
        <!-- <p class="text-center text-success">Thanks For Submiting The Form, We Will Contact You ASAP.</p> -->
        <form action="index.php" class="container" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
                <label for="Number">Number</label>
                <input type="text" name="number" class="form-control" id="number" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
                <label for="Place">Place</label>
                <input type="text" name="place" class="form-control" id="Place" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
                <label for="desc">Description</label>
                <textarea class="form-control" name="other" id="desc" cols="30" rows="5"></textarea>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <!-- Contact Section End-->

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center footer1 justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="footer1">
            <div class="container text-center text-md-start">
                <!-- Grid row -->
                <div class="row pt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>Company name
                        </h6>
                        <p>
                            Here you can use rows and columns to organize your footer content. Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Products
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Angular</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">React</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Vue</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Laravel</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Pricing</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Settings</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Orders</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Help</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Contact
                        </h6>
                        <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            info@example.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->
    </footer>
    <!-- Footer -->




    <script src="index.js"></script>
    <script src="https://kit.fontawesome.com/a14e8f1dcf.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>






</body>

</html>