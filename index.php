

<!-- html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#"><span class="text-warning" >Build</span>Con
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>  
                <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                </li>   
                <li class="nav-item">
                    <a class="nav-link" href="#portfolio">Portfolio</a>
                  </li>  
                <li class="nav-item">
                    <a class="nav-link" href="#team">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                  </li>       

              
                
            </ul>
          </div>
        </div>
    </nav>
    <!-- Carousel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/how-to-design-a-house.jpg"height="700px"  class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
              <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/how-to-design-a-house.jpg" height="700px" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
              <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/how-to-design-a-house.jpg"height="700px"  class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
              <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
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
    </div><br><br>

    <!-- About Section -->

    <Section id="about" class="about-section-padding">
        <div class="container">
            <div class="row">
                <div  class="col-lg-4 col-md-12 col-12">
                    <div class="about-img">
                        <img src="img/about.jpg" width="350px" alt="Image about" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="about-text">
                        <h2>We Provide Best Quality <br> Services Ever </h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti asperiores consectetur a, blanditiis molestias necessitatibus expedita distinctio alias? Ipsa sed distinctio consectetur, autem quae quis. Totam quas corporis quisquam quia!</p>
                        <a href="#" class="btn btn-warning">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </Section>

    <!-- services section-->

    <section id="services" class="services section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Our Services</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Dolore quas corporis commodi ducimus, aspernatur ipsa rem! Officiis facilis hic modi neque aspernatur mollitia? Itaque ratione deleniti officia, ducimus blanditiis possimus!</p>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <i class="bi bi-subtract"></i>
                            <h3 class="card-title"> Best Quality</h3>
                            <p class="lead">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos numquam sapiente cum accusamus consequuntur amet molestiae. Ab, recusandae suscipit quae debitis aspernatur eum, saepe eos, sint distinctio temporibus corporis et.

                            </p>
                            <button class="btn btn-warning text-dark" > Read More</button>

                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <i class="bi bi-slack"></i>
                            <h3 class="card-title"> Sustainability</h3>
                            <p class="lead">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos numquam sapiente cum accusamus consequuntur amet molestiae. Ab, recusandae suscipit quae debitis aspernatur eum, saepe eos, sint distinctio temporibus corporis et.

                            </p>
                            <button class="btn btn-warning text-dark" > Read More</button>

                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <i class="bi bi-playstation"></i>
                            <h3 class="card-title"> Integrity</h3>
                            <p class="lead">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos numquam sapiente cum accusamus consequuntur amet molestiae. Ab, recusandae suscipit quae debitis aspernatur eum, saepe eos, sint distinctio temporibus corporis et.

                            </p>
                            <button class="btn btn-warning text-dark" > Read More</button>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- Profile Section -->

    <section id="portfolio" class="portfolio section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Our Projects</h2>
                        <p>Lorem ipsum dolor sit amet consectetur , <br> adipisicing elit. Laboriosam quo veritatis nulla adipisicing elit. Doloribus, nostrum</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card  text-center bg-white pb-2">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4">
                                <img src="img/project-1.jpg" alt="" class="img-fluid">
                            </div>
                            <h3 class="card-title"> Building Make</h3>
                            <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero
                                laboriosam nam veniam reprehenderit illum vitae aspernatur minima dicta porro.Rem,
                            </p>
                            <button class="btn bg-warning text-dark">Learn More</button>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card  text-center bg-white pb-2">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4">
                                <img src="img/project-3.jpg" alt="" class="img-fluid">
                            </div>
                            <h3 class="card-title"> Building Make</h3>
                            <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero
                                laboriosam nam veniam reprehenderit illum vitae aspernatur minima dicta porro.Rem,
                            </p>
                            <button class="btn bg-warning text-dark">Learn More</button>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card  text-center bg-white pb-2">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4">
                                <img src="img/project-2.jpg" alt="" class="img-fluid">
                            </div>
                            <h3 class="card-title"> Building Make</h3>
                            <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero
                                laboriosam nam veniam reprehenderit illum vitae aspernatur minima dicta porro.Rem,
                            </p>
                            <button class="btn bg-warning text-dark">Learn More</button>
                        </div>
                    </div>
                </div>
            
            </div>

        </div>
    </section>


    <!--  team Section -->

    <section id="team" class="team section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Our Projects</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Modi perspiciatis, hic dolores voluptatibus pariatur sunt recusandae ratione nisi id suscipit iure perferendis saepe</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="img/team-1.jpg" alt="" class="img-fluid rounded-circle">
                            <h3 class="card-title py-2" >Jack Wilson</h3>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                </p>
                                <p class="socials">
                                    <i class="bi bi-twitter text-dark mx-1"></i>
                                    <i class="bi bi-facebook text-dark mx-1"></i>
                                    <i class="bi bi-linkedin text-dark mx-1"></i>
                                    <i class="bi bi-instagram text-dark mx-1"></i>
                                </p>
                            
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="img/team-2.jpg" alt="" class="img-fluid rounded-circle">
                            <h3 class="card-title py-2" >Jack Wilson</h3>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                </p>
                                <p class="socials">
                                    <i class="bi bi-twitter text-dark mx-1"></i>
                                    <i class="bi bi-facebook text-dark mx-1"></i>
                                    <i class="bi bi-linkedin text-dark mx-1"></i>
                                    <i class="bi bi-instagram text-dark mx-1"></i>
                                </p>
                            
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="img/team-3.jpg" alt="" class="img-fluid rounded-circle">
                            <h3 class="card-title py-2" >Jack Wilson</h3>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                </p>
                                <p class="socials">
                                    <i class="bi bi-twitter text-dark mx-1"></i>
                                    <i class="bi bi-facebook text-dark mx-1"></i>
                                    <i class="bi bi-linkedin text-dark mx-1"></i>
                                    <i class="bi bi-instagram text-dark mx-1"></i>
                                </p>
                            
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="img/team-4.jpg" alt="" class="img-fluid rounded-circle">
                            <h3 class="card-title py-2" >Jack Wilson</h3>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                </p>
                                <p class="socials">
                                    <i class="bi bi-twitter text-dark mx-1"></i>
                                    <i class="bi bi-facebook text-dark mx-1"></i>
                                    <i class="bi bi-linkedin text-dark mx-1"></i>
                                    <i class="bi bi-instagram text-dark mx-1"></i>
                                </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Contect Section -->

    <section id="contact" class="contact section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Contact Us</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Modi perspiciatis ariatur sunt recusandae </p>
                    </div>
                </div>
            </div>

            <div class="row m-0">
                <div class="col-md-12 p-0 pt-4 pb-4">
                    <div class="row">
                        <form action="insert.php"method="POST">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <input type="text" class="form-control" name="name"  required placeholder="Your Full Name">
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <input type="email" class="form-control" name="email"  required placeholder="Your Email Here">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <textarea name="query" id="#"  rows="3" required class="form-control"   placeholder="Your Query Here"></textarea>
                            </div>
                        </div> 
                     

                        <button class="btn btn-warning btn-lg btn-block mt-3"> Send Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>