
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Poly certif</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--
TemplateMo 546 Sixteen Clothing
https://templatemo.com/tm-546-sixteen-clothing
-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">


  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->

    <header class="">

      <nav class="navbar navbar-expand-lg">
        
        <div class="container">
        <div class="row">
          <div class="col-2 .col-md-2" align="center">
          <a href="#"><img height="60" width="50" src="/certifimage/polylogo.png" alt=""></a>
             </div> </div>
          <a class="navbar-brand" href="index.html"><h2>Poly <em>Certif</em></h2></a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{url('/')}}">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="/">
                Categories </a>
              </li>
            

              <li class="nav-item">
              @if (Route::has('login'))
               
                    @auth

                    <li class="nav-item">
                <a class="nav-link" href="{{url('showcart')}}">
                <i class="fa fa-certificate" aria-hidden="true"></i>
  
                My Certificates[{{$count}}]</a>
              </li>

                    <x-app-layout>

</x-app-layout>

                    @else
                    <li><a class="nav-link" href="{{ route('login') }}" >Log in</a></li>

                        @if (Route::has('register'))
                        <li>    <a class="nav-link" href="{{ route('register') }}" >Register</a></li>
                        @endif
                    @endauth
               
                @endif
             </li>
            </ul>
          </div>
        </div>
      </nav>


  
      @if(session()->has('message'))

<div class="alert alert-success">

{{session()->get('message')}}

<button type="button" class="close" data-dismiss="alert">x
    
</button>

</div>

@endif





    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
      <div class="banner-item-02">
          <div class="text-content">
           
            <h4>Polytechnique Sousse</h4>
            <h2>Le succès commence par un bon choix</h2>
          </div>
        </div>
        <div class="banner-item-01">
          <div class="text-content">   
            <h4> Certifications</h4>
            <h2>Ecole Polytechnique Sousse</h2>
          </div>
        </div>
        
        
      </div>
    </div>
    <!-- Banner Ends Here -->

    @include('user.product')


    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>
Bienvenue à l'école Polytechnique de Sousse</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Le succès commence par un bon choix</h4>
              <p><a rel="nofollow" href="https://templatemo.com/tm-546-sixteen-clothing" target="_parent"></a> 
Bienvenue à l'école Polytechnique de Sousse
Fondée en 2009, L’Ecole Polytechnique de Sousse est une grande école privée d’enseignement et de recherche à vocation internationale, accréditée EUR- ACE et qui a pour unique vocation de former des ingénieurs ayant un niveau technique et scientifique conforme  aux meilleurs  standards internationaux. Elle se fixe résolument comme mission de garantir une excellente insertion professionnelle à ses jeunes diplômés en les propulsant directement  à l’employabilité.</p>
              <ul class="featured-list">
                <li><a href="#">Accréditation</a></li>
                <li><a href="#">Notre Nouveau Campus
</a></li>
              
                <li><a href="#">Nos Événement</a></li>
            
              </ul>
              <a href="#" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/poly.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md--12">
                  </div>
                <div class="col-md-12" align="center">
                <a href="#"><img height="400" width="300" src="/certifimage/polylogo.png" alt=""></a>
<br>
                  <a href="https://www.polytecsousse.tn/" class="filled-button" >PolyTech</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
             
            
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
