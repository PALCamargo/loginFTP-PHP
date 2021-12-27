<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Carousel Template · Bootstrap v5.0</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="img/grupo-milbr.png" alt="Grupo Milbr" width="70"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>  </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Canal de Vendas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Suporte Técnico</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Webmail</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Teste Velocidade</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Área do Cliente</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

<main>
  <style>
    .carousel-caption{
        transform: translateY(-19%);
        bottom: initial;
        top: 19%;
    }
    .carousel-control-next,
    .carousel-control-prev /*, .carousel-indicators */ {
        filter: invert(100%);
    }
  </style>

  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <div class="carousel-caption d-none d-md-block">
        <h4 class="h4 text-decoration-underline text-center fw-light text-dark">Mais que uma equipe técnica, uma verdadeira família Milbr pronta para te atender</h4>
        </div>
        <img src="img/tecnicos.png" class="d-block w-100 h-50" style="margin-top: 256px;" alt="img/milbr.jpg" >
      </div>
      <div class="carousel-item" data-bs-interval="10000">
        <img src="img/milbr.jpg" class="d-block w-100" alt="img/milbr.jpg">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="10000">
        <img src="img/milbr.jpg" class="d-block w-100" alt="img/milbr.jpg">
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


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
    <div class="col-lg-3 text-center">
        <img class="bd-placeholder-img float-left" width="165" src="img/net.png" alt="">
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-3 text-center">
      <img class="bd-placeholder-img float-left" width="165" src="img/ti.png" alt="">
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-3 text-center">
      <img class="bd-placeholder-img float-left" width="165" src="img/td.png" alt="">
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-3 text-center">
      <img class="bd-placeholder-img float-left" width="165" src="img/tv.png" alt="">
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h3 class="h3 text-decoration-underline">Quando o valor da conexão ultrapassa os limites da internet... </h3><h4><span class="text-muted lead">Nossa conexão também está no atendimento, suporte, transparência e na confiaça. </span></h4>
      </div>
      <div class="col-md-5">
        <img src="img/triplo-play.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" style="background: #c7ecee;" width="500">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h3 class="h3 fw-light text-center">Único provedor <span class="text-decoration-underline">SEM CONTRATO</span> de fidelidade, pois realmente entrega o que promete!</h3>
      </div>
      <div class="col-md-5 order-md-1">
      <img src="img/livre.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="400">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-12">
        <h2 class="h2 text-decoration-underline fw-light">Nossas lojas</h2>
      </div>
      <div class="col-md-12">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/triplo-play.png" class="d-block w-100" alt="img/triplo-play.png">
          </div>
          <div class="carousel-item">
            <img src="img/ti.png" class="d-block w-100" alt="img/triplo-play.png">
          </div>
          <div class="carousel-item">
            <img src="img/tv.png" class="d-block w-100" alt="img/triplo-play.png">
          </div>
        </div>
      </div>
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      
  </body>
</html>
