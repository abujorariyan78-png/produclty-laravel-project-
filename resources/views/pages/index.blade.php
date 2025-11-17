<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body >

  <!-- Napber stfart -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="{{ asset('assets/img/logo.svg') }}" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Customers</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Pricing</a>
        </li>
      </ul>
      <form class="d-flex " role="search" style="gap: 10px;">
      <button type="button" class="btn btn-light" style="width: 106px;height: 48px;border: 1px solid black;">Sing In</button>
        <button type="button" class="btn btn-warning" style="width: 106px;height: 48px;">Sing Up</button>
        
      </form>
    </div>
  </div>
</nav>
<!-- napber end -->

<!-- hero sections start -->
<div class="container mt-2">
  <div class="row row-cols-1 row-cols-md-2 d-flex align-items-center">

    @if (count($main)>0)
    @foreach ($main as $main)
        <div class="col">
      <div class="">
  <div class="card-body">
    <h1 class="card-title" style="font-size: 60px;">{{ $main->title }}</h1>
    <p class="card-text">
      {{ $main->sub_title }}

.</p>
   <button  class=" btn-get"> Get Started</button>
  </div>
</div>


    </div>
    <div class="col">
      <img style="height: 50vh" class="img-fluid" src="{{ url($main->main_image) }}" alt="">
    </div>

  </div>
    @endforeach      
    @endif

  
</div>


 <!-- hero sections end -->


 <!-- superpowers start -->
<div class="container mt-3">
  <div class="super-headr">
    <h1 class="text-center fw-bold" style="font-size: 60px;">We design tools to unveil <br> your superpowers</h1>
  </div>

  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 mt-5  justify-content-between">
    @if (count($super)>0)
    @foreach ($super as $super)
      <div class="col">
      <div class="card-groups d-block">
        <div class="card-items p-3" style="width: 250px; height: 180px;">
          <img style="font-size: 15px;" src="{{ url($super->icon_image) }}" alt="">
          <h3>{{ $super->title }}</h3>
          <p>{{ $super->sub_title }}</p>
        </div>
      </div>
    </div>
    @endforeach
      
    @endif
    
  
    
  
  </div>
  
</div>
<button class="singup btn-get">Singup Now</button>
 <!-- superpowers end -->

 <!-- Design Professionals start -->

 <div class="container mt-5">
  <div class="row row-cols-1 row-cols-md-2 align-items-center justify-content-between">
    <div class="cok">

      <div class="card-groups">
        <div class="card-items">

          <h4>{{ $validation->sub_header }} for</h4>
          <h1>{{ $validation->header }}</h1>
          <p>{{ $validation->sub_title3 }}</p>
        </div>

        <div class="card-items">
          <h5>{{ $validation->title1 }}</h5>
          <p>{{ $validation->sub_title1 }}</p>
        </div>
        <div class="card-items">
           <h5>{{ $validation->title2 }}</h5>
          <p>{{ $validation->sub_title2 }}</p>
        </div>
          <div class="card-items">
             <h5>{{ $validation->title3 }}</h5>
          <p>{{ $validation->sub_title3 }}</p>
          </div>
      </div>
    </div>
    <div class="col">
      <img style="height: 40vh" class="img-fluid" src="{{ url($validation->image) }}" alt="">
    </div>

  </div>
 </div>

 <!-- Design Professionals end -->
  <!-- Product Managers start -->

  <div class="container mt-4">
    <div class="row row-cols-1 row-cols-md-2 align-items-center">
      <div class="col">
        <img class="img-fluid" src="{{ url($porducts->manager_image) }}" alt="">
      </div>
      <div class="col">
        <div class="card-lavel">

          <h5>{{ $porducts->sub_header }}</h5>

          <h1 class="fw-bold">{{ $porducts->header }}</h1>
          <p>{{ $porducts->para }}</p>




          
          <div class="lave-items d-flex align-items-center " style="gap: 10px;">
            <div class="icon"> <img src="tick.png" alt=""></div>
            <div class="titel">
              <p>{{ $porducts->title1 }}</p>
            </div>

          </div>
            
          <div class="lave-items d-flex align-items-center " style="gap: 10px;">
            <div class="icon"> <img src="tick.png" alt=""></div>
            <div class="titel">
              <p>{{ $porducts->title2 }}</p>
            </div>

          </div>
            
          <div class="lave-items d-flex align-items-center " style="gap: 10px;">
            <div class="icon"> <img src="tick.png" alt=""></div>
            <div class="titel">
              <p>{{ $porducts->title3 }}</p>
            </div>

          </div>
        </div>


      </div>

    </div>
  </div>

  <!-- Product Managers end -->

  <!-- Marketers start -->

  <div class="container mt-5">
     <div class="container mt-5">
  <div class="row row-cols-1 row-cols-md-2">
    <div class="cok">

      <div class="card-groups">
        <div class="card-items">
          <h4>Optimisation for</h4>
          <h1>Marketers</h1>
          <p>Few would argue that, despite the advancements offeminism over the past three decades, women still face adouble standard when it comes to their behavior..</p>
        </div>

        <div class="card-items">
          <h5>Accessory makers</h5>
          <p>While most people enjoy casino gambling, sports betting,lottery and bingo playing for the fun</p>
        </div>
        <div class="card-items">
           <h5>Alterationists</h5>
          <p>If you are looking for a new way to promote your businessthat won't cost you money,</p>
        </div>
          <div class="card-items">
             <h5>Custom Design designers</h5>
          <p>If you are looking for a new way to promote your businessthat won't cost you more money,</p>
          </div>
      </div>
    </div>
    <div class="col">
      <img class="img-fluid" src="{{ asset('assets/img/marketer.png') }}" alt="">
    </div>

  </div>
 </div>


  </div>
   <!-- Marketers end -->

   <!-- need hero start -->

   <div class="container-fluid mt-5 bac" style="height: 500px;">

    <div class="need" style="width: 600px;margin: 0 auto; margin-top: ;">
      <h1 style="font-weight: 500;font-size: 60px;">Need a super hero?</h1>
      <p>Do you require some help for your project: Conception workshop,prototyping, marketing strategy, landing page, Ux/UI?</p>

      <button class="expart btn-get">Contect our Expart</button>

    </div>
    
   </div>
    <!-- need hero end -->
<!-- marckting start -->


<div class="container mt-5">
   <div class="hdr mt-3 text-center">
      <h1>Marketing Strategies</h1>
      <p>Join 40,000+ other marketers and get proven strategies on email marketing</p>
    </div>
  <div class="row row-cols-1 row-cols-md-3">
   @if (count($marketing)>0)
   @foreach ($marketing as $marketing)
       <div class="col">
      <div class="card" style="width: 20rem;">
  <img src="{{ url($marketing->card_image) }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h6 class="card-title">{{ $marketing->sub_title }}</h6>
    <h4 class="card-text fw-bold">{{ $marketing->title }}</h4>
  
  </div>
</div>
    </div>
   @endforeach
     
   @endif
  
   


  </div>
</div>
 <!-- marckting end -->


 <!-- footer start -->

 <footer class="container " style="margin-top: 100px;">
  <hr>

  <div class="main mt-3">
   <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 m-5">
    <div class="col">
       <div class="logo">
      <img src="logo.svg" alt="">
    </div>
    </div>
    <div class="col">
      <div class="list-group">
        <h4>Quick Links</h4>
        <div class="ul-list">
          <ul class="list-unstyled">
            <li>About us</li>
            <li>Blog</li>
            <li>Contact</li>
            <li>FAQ</li>
          </ul>
        </div>
      </div>

    </div>
    <div class="col">
        <div class="list-group">
        <h4>Legal stuff</h4>
        <div class="ul-list">
          <ul class="list-unstyled">
            <li>Disclaimer</li>
            <li>Financing</li>
            <li>Privacy Policy</li>
            <li>Terms of Service</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col">
      <h4>knowing you're always on the best energy deal.</h4>
      <div class="input-group">
        <div class="input-items">
          <input type="text" placeholder="Enter Your Phone Number" style="height: 30px; width: 200px;">
        </div>
        <div class="input-items">
          <button class="expart btn-get">Singup Now</button>
        </div>
      </div>

    </div>

   </div>

  </div>



<hr class="mt-3">
 </footer>

 <!-- footer end -->

 <!-- copyright footer start -->

 <div class="container footer d-flex justify-content-between align-items-center">
  <h5>© 2025</h5>
  <h5>Made by Abujor Ariyan</h5>
 </div>

 <!-- copyright footer end -->

</body>
</html>