<?php 
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!= true) {
  header("location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome - <?php echo $_SESSION['username'] ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/utilites.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php  require 'partials/nav.php' ?>
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/1.jpg" class="d-block w-100" alt="..." height="600px">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/4.jpg" class="d-block w-100" alt="..." height="600px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/5.jpg" class="d-block w-100" alt="..." height="600px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<section class="my-5" id="about">
    <div class="my-5">
        <h2 class="text-center">About Us</h2>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 my-5">
                    <img src="images/3.jpg" alt="" srcset="" class="img-fluid">
                </div>
                <div class="col-lg-6 col-md-6 col-12 my-5">
                    <h1 class="display-4">About Aroo</h1>
                    <p class="py-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti accusamus distinctio similique? Magni aliquam nemo nobis fugiat error dolore ipsa ullam optio suscipit? Repudiandae architecto, consequuntur cumque veritatis velit officia voluptatem commodi. Assumenda, omnis non.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="my-5" id="services">
    <div class="my-5">
        <h2 class="text-center"> Our Services</h2>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 my-3">
                    <div class="card" style="width: 22rem;">
                        <img src="images/serv1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 my-3">
                    <div class="card" style="width: 22rem;">
                        <img src="images/serv2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 my-3">
                    <div class="card" style="width: 22rem;">
                        <img src="images/serv4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="my-5" id="gallery">
    <div class="my-5">
        <h2 class="text-center">Gallery</h2>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 my-5">
                    <img src="images/gal1.jpg" alt="" srcset="" class="img-fluid p-0 m-0">
                </div>
                <div class="col-lg-4 col-md-4 col-12 my-5">
                    <img src="images/gal2.jpg" alt="" srcset="" class="img-fluid p-0 m-0">
                </div>
                <div class="col-lg-4 col-md-4 col-12 my-5">
                    <img src="images/gal3.jpg" alt="" srcset="" class="img-fluid p-0 m-0">
                </div>
                <div class="col-lg-4 col-md-4 col-12 my-5">
                    <img src="images/gal4.jpg" alt="" srcset="" class="img-fluid p-0 m-0">
                </div>
                <div class="col-lg-4 col-md-4 col-12 my-5">
                    <img src="images/gal5.jpg" alt="" srcset="" class="img-fluid p-0 m-0">
                </div>
                <div class="col-lg-4 col-md-4 col-12 my-5">
                    <img src="images/gal6.jpg" alt="" srcset="" class="img-fluid p-0 m-0">
                </div>
                <div class="col-lg-4 col-md-4 col-12 my-5">
                    <img src="images/gal7.jpg" alt="" srcset="" class="img-fluid p-0 m-0">
                </div>
                <div class="col-lg-4 col-md-4 col-12 my-5">
                    <img src="images/gal8.jpg" alt="" srcset="" class="img-fluid p-0 m-0">
                </div>
                <div class="col-lg-4 col-md-4 col-12 my-5">
                    <img src="images/gal9.jpg" alt="" srcset="" class="img-fluid p-0 m-0">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="my-5" id="contact">
    <div class="my-5">
        <h2 class="text-center">Contact </h2>
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off"  required>
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" autocomplete="off" required>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form> 
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>