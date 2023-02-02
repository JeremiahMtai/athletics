<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atheletics Club System</title>

    <link rel="icon" type="image/x-icon" href="img/Logo.ico">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.2.0/dist/css/coreui.min.css" rel="stylesheet" integrity="sha384-UkVD+zxJKGsZP3s/JuRzapi4dQrDDuEf/kHphzg8P3v8wuQ6m9RLjTkPGeFcglQU" crossorigin="anonymous">


    <!-- css style -->
    <link rel="stylesheet" href="style/style.css">
    <!--Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  </head>

   

</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
  <a style="color: #000;
    font-size: 25px;
    text-transform: uppercase;
    font-weight: 700;
    letter-spacing: 2px;" class="navbar-brand" href="index.php"><span><img  class="rounded-circle" style="height: 50px; width: 50px;"src="img/pokot.png" alt=""></span>&nbsp;&nbsp;<span class="text-warning">Athle</span>tics</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#events">Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#gallery">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#training">Trainings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#record">Records</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#coaches">Coaches</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-info" href="login.php">Login</a>
          </li>
        </ul>
      </div>
  </div>
</nav>
<!-- end of navbar -->

<!-- Carousel -->


<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/r2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption">
          <h5>First Athlete</h5>
          <p class="text-light">Some representative placeholder content for the first slide.</p>
          <p><a href="#" class="btn btn-warning">Learn More</a></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/r1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption">
        <h5>Second Athlete</h5>
        <p class="text-light">Some representative placeholder content for the third slide.</p>
        <p><a href="#" class="btn btn-warning">Learn More</a></p>
    </div>
    </div>
    <div class="carousel-item">
      <img src="img/r3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption">
          <h5>Third Athlete</h5>
          <p class="text-light">Some representative placeholder content for the third slide.</p>
          <p><a href="#" class="btn btn-warning">Learn More</a></p>
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
<!-- end of carousel -->

<!-- Events Section -->
  <section id="events" class="event section-padding">
    <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-12 col-12">
            <div class="event-img">
              <img src="img/r5.jpg" alt="" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-8 col-12 ps-lg-5 mt-md-5">
            <div class="event-text">
              <h2>We are hosting Western Region athletics in <br>December 2023 </h2>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde quis delectus architecto. Sapiente minima numquam soluta esse et distinctio quisquam, in hic sint modi dolorum iure ducimus laboriosam, eveniet quos.</p>
              <a href="#" class="btn btn-warning">Learn More</a>
            </div>
          </div>
        </div>
    </div>
  </section>
  <!-- End of Event Section -->

  <!-- gallery section -->
    <section id="gallery" class="gallery section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-header text-center pb-5">
              <h2>Our Gallery</h2>
              <!-- <img src="img/pusa.jpg" alt=""> -->

              <div class="container text-center">
                  <div class="row">
                      <div class="col">
                      <div class="card" style="width: 18rem;">

                      <!-- style -->
                      <style>
                        .cont {
                            position: relative;
                            width: 100%;
                            height: 50%;                        
                          }

                          .imag {
                            opacity: 1;
                            display: block;
                            width: 100%;
                            height: auto;
                            transition: .5s ease;
                            backface-visibility: hidden;
                          }

                          .middle {
                            transition: .5s ease;
                            opacity: 0;
                            position: absolute;
                            top: 50%;
                            left: 50%;
                            transform: translate(-50%, -50%);
                            -ms-transform: translate(-50%, -50%);
                            text-align: center;
                          }

                          .cont:hover .imag {
                            opacity: 0.5;
                          }

                          .cont:hover .middle {
                            opacity: 1;
                          }

                          .txt {
                            /* background-color: antiquewhite; */
                            color: crimson;
                            font-size: 16px;
                            padding: 16px 32px;
                          }
                      </style>
                      
                      <!-- end of style -->
                      <!-- image hover -->
                      <div class="cont">
                          <img src="img/r4.jpg" alt="Avatar" class="imag" style="width:100%">
                          <div class="middle">
                            <!-- <div class="txt">Jeremiah Mtai</div> -->
                          </div>
                      </div>
                      <!-- end of image hover -->

                          <!-- <img src="img/Logo.png" class="card-img-top" alt="..."> -->
                          <div class="card-body">
                            <!-- <h5 class="card-title">Jeremiah Mtai</h5> -->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-warning">Go somewhere</a>
                          </div>
                      </div>



                      </div>
                      <div class="col">
                      <div class="card" style="width: 18rem;">
                          <!-- <img src="img/gok.png" class="card-img-top" alt="..."> -->
                      <!-- image hover -->
                      <div class="cont">
                          <img src="img/r3.jpg" alt="Avatar" class="imag" style="width:100%">
                          <div class="middle">
                            <!-- <div class="txt">G.O.K</div> -->
                          </div>
                      </div>
                      <!-- end of image hover -->
                          <div class="card-body">
                            <!-- <h5 class="card-title">Government of Kenya</h5> -->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-warning">Go somewhere</a>
                          </div>
                      </div>



                      </div>
                      <div class="col">
                      <div class="card" style="width: 18rem;">
                          <!-- <img src="img/Kanda.jpg" class="card-img-top" alt="..."> -->
                          <!-- image hover -->
                          <div class="cont">
                              <img src="img/r1.jpg" alt="Avatar" class="imag" style="width:100%">
                              <div class="middle">
                                <!-- <div class="txt">Kandakor Moses</div> -->
                              </div>
                          </div>
                          <!-- end of image hover -->
                          <div class="card-body">
                            <!-- <h5 class="card-title">Kandakor Moses</h5> -->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-warning">Go somewhere</a>
                          </div>
                      </div>




                      </div>
                  </div>
              </div>


            </div>

          </div>
        </div>
      </div>
    </section>

    <!-- trainings section -->
    <section id="training" class="training training-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="training-header text-center pb-5">
              <h2>Trainings</h2>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum velit ducimus  quae! Porro optio voluptatem <br> temporibus? Rerum architecto sed sequi voluptates perspiciatis fugiat accusamus qui 
                reprehenderit necessitatibus enim, incidunt provident.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <style>
          .card{
            margin-bottom: 30px;
            box-shadow: 0px 2px 5px skyblue;
          }
        </style>
        <div class="col-12 col-md-12 col-lg-4">
          <div class="card text-white text-center bg-dark pb-2">
            <div class="card-body">
            <i class="bi bi-archive"></i>
              <h3 class="card-title">Kibabii</h3>
              <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Libero, quo aut? Nam quis quam ea animi saepe necessitatibus dolor, eum quae fugiat asperiores accusamus totam ad, suscipit sequi sapiente. Eligendi.</p>
              <button class="btn btn-warning text-dark">Read More</button>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-12 col-lg-4">
          <div class="card text-white text-center bg-dark pb-2">
            <div class="card-body">
              <i class="bi bi-airplane-engines"></i>
              <h3 class="card-title">Bungoma</h3>
              <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Libero, quo aut? Nam quis quam ea animi saepe necessitatibus dolor, eum quae fugiat asperiores accusamus totam ad, suscipit sequi sapiente. Eligendi.</p>
              <button class="btn btn-warning text-dark">Read More</button>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-12 col-lg-4">
          <div class="card text-white text-center bg-dark pb-2">
            <div class="card-body">
              <i></i>
              <h3 class="card-title">Kapenguria</h3>
              <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Libero, quo aut? Nam quis quam ea animi saepe necessitatibus dolor, eum quae fugiat asperiores accusamus totam ad, suscipit sequi sapiente. Eligendi.</p>
              <button class="btn btn-warning text-dark">Read More</button>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- trainings section -->
    <!-- Past recors -->

    <section id="record" class="records section-padding">
      <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="training-header text-center pb-5">
                <h2>Records</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum velit ducimus  quae! Porro optio voluptatem <br> temporibus? Rerum architecto sed sequi voluptates perspiciatis fugiat accusamus qui 
                  reprehenderit necessitatibus enim, incidunt provident.</p>
              </div>
            </div>
          </div>
      </div>
      
          <div class="row">
            <div class="col-12 col-md-12 col-lg-4">
              <div class="card text-lifgt text-center bg-white pb-2">
                <div class="card-body text-dark mb-4">
                  <img src="img/c1.jpg" alt="" class="img-fluid">
                
                </div>
                <h3 class="card-title">The latest Athletics Records</h3>
                <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet quasi delectus similique nesciunt! Laboriosam ut, aut ex nemo repudiandae neque expedita odit <br> asperiores similique nam saepe sed tempora in quos?</p>
                <button class="btn btn-warning text-dark">Learn More</button>
              </div>
            </div>

            <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-lifgt text-center bg-white pb-2">
                  <div class="card-body text-dark mb-4">
                    <img src="img/c2.jpg" alt="" class="img-fluid">
                  
                  </div>
                  <h3 class="card-title">The latest Athletics Records</h3>
                  <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet quasi delectus similique nesciunt! Laboriosam ut, aut ex nemo repudiandae neque expedita odit <br> asperiores similique nam saepe sed tempora in quos?</p>
                  <button class="btn btn-warning text-dark">Learn More</button>
                </div>
            </div> 

            <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-lifgt text-center bg-white pb-2">
                  <div class="card-body text-dark mb-4">
                    <img src="img/r4.jpg" alt="" class="img-fluid">
                  
                  </div>
                  <h3 class="card-title">The latest Athletics Records</h3>
                  <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet quasi delectus similique nesciunt! Laboriosam ut, aut ex nemo repudiandae neque expedita odit <br> asperiores similique nam saepe sed tempora in quos?</p>
                  <button class="btn btn-warning text-dark">Learn More</button>
                </div>
            </div> 
          </div>

    </section>

    <!-- coaches section -->
    <section class="coaches section-padding" id="coaches">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-header text-center pb-5">
              <h2>Coaches</h2>
              <p>Lorem ipsum dolor sit amet consectetur adia <br> corrupti excepturi, laboriosam placeat consectetur iure aut architecto.</p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card text-center">
              <div class="card-body">
                <img src="img/r1.jpg" alt="" class="img-fluid rounded-circle">
                <h2 class="card-title py-2">Jeremiah Mtai</h2>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad suscipit consequuntur ut sequi unde et facere, <br>  dolores nesciunt odio!</p>
                 
                <p class="socials">
                  <i class="bi bit-twitter text-dark mx-1"></i>
                  <i class="bi bi-android2"></i>
                </p>

              </div>

            </div>

          </div>

          <div class="col-12 col-md-6 col-lg-3">
            <div class="card text-center">
              <div class="card-body">
                <img src="img/c2.jpg" alt="" class="img-fluid rounded-circle">
                <h2 class="card-title py-2">Jeremiah Mtai</h2>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad suscipit consequuntur ut sequi unde et facere, <br>  dolores nesciunt odio!</p>
                 
                <p class="socials">
                  <i class="bi bit-twitter text-dark mx-1"></i>
                  <i class="bi bi-android2"></i>
                </p>

              </div>

            </div>

          </div>

          <div class="col-12 col-md-6 col-lg-3">
            <div class="card text-center">
              <div class="card-body">
                <img src="img/c1.jpg" alt="" class="img-fluid rounded-circle">
                <h2 class="card-title py-2">Jeremiah Mtai</h2>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad suscipit consequuntur ut sequi unde et facere, <br>  dolores nesciunt odio!</p>
                 
                <p class="socials">
                  <i class="bi bit-twitter text-dark mx-1"></i>
                  <i class="bi bi-android2"></i>
                </p>

              </div>

            </div>

          </div>

        </div>
      </div>
    </section>

    <!-- Coaches Section -->

    <!-- contact us -->
    <section class="contact section-padding" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-header text-center pb-5">
              <h2>Contact Us</h2>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo, <br> voluptates. Sed ut mollitia accusantium voluptas est distinctio cumque nostrum accusamus ipsam vol</p>

            </div>
          </div>
        </div>

        <div class="row m-0">
          <style>
            #us{
              box-shadow: 0px 2px 5px #777;
            }
          </style>
          <div class="col-md-12 p-0 pt-4 pb=4" id="us">
            <form action="#" class="bg-light p-4 m-auto">
              <div class="row">
                <div class="col-md-12">
                  <div class="mb-3">
                    <input type="text" class="form-control" required placeholder="Your Full Name">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="mb-3">
                    <input type="email" class="form-control" required placeholder="Your Email">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="mb-3">
                    <textarea name="" id="" rows="3" class="form-control" placeholder="Your Query Here"></textarea>
                  </div>
                </div>

                <button class="btn btn-warning btn-lg btn-block mt-3">Send Now</button>

              </div>
            </form>
            
          </div>
        </div>




      </div>

    </section>
    <!-- end of contact us -->

    <!-- footer -->
    <footer class="bg-dark p-2 text-center">
      <div class="container">
        <p class="text-white">&copy; 2023 All Rights Reserved @jeremiahmtai.co.ke</p>

      </div>

    </footer>

    <!-- end of footer -->
   
    



    
<!-- js cdn -->
<!-- <link rel="stylesheet" href="bootstrap/js/bootstrap.bundle.min.js"> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- end of js cdn -->
</body>
</html>