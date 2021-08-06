@extends('user.layouts.app')
@section('content')

<!-- hero area -->
<section class="hero-area bg-primary" id="parallax">
    <div class="container">
      <div class="row">
        <div class="col-lg-11 mx-auto">
          <h1 class="text-white font-tertiary">Hi! I’m <br> Fauzi Riski <br> Software Developer</h1>
        </div>
      </div>
    </div>
    <div class="layer-bg w-100">
      <img class="img-fluid w-100" src="{{ asset('client/images/illustrations/leaf-bg.png') }}" alt="bg-shape">
    </div>
    <div class="layer" id="l2">
      <img src="{{ asset('client/images/illustrations/dots-cyan.png') }}" alt="bg-shape">
    </div>
    <div class="layer" id="l3">
      <img src="{{ asset('client/images/illustrations/leaf-orange.png') }}" alt="bg-shape">
    </div>
    <div class="layer" id="l4">
      <img src="{{ asset('client/images/illustrations/dots-orange.png') }}" alt="bg-shape">
    </div>
    <div class="layer" id="l5">
      <img src="{{ asset('client/images/illustrations/leaf-yellow.png') }}" alt="bg-shape">
    </div>
    <div class="layer" id="l6">
      <img src="{{ asset('client/images/illustrations/leaf-cyan.png') }}" alt="bg-shape">
    </div>
    <div class="layer" id="l7">
      <img src="{{ asset('client/images/illustrations/dots-group-orange') }}.png" alt="bg-shape">
    </div>
    <div class="layer" id="l8">
      <img src="{{ asset('client/images/illustrations/leaf-pink-round') }}.png" alt="bg-shape">
    </div>
    <div class="layer" id="l9">
      <img src="{{ asset('client/images/illustrations/leaf-cyan-2') }}.png" alt="bg-shape">
    </div>
    <!-- social icon -->
    <ul class="list-unstyled ml-5 mt-3 position-relative zindex-1">
      <li class="mb-3"><a class="text-white" href="#"><i class="ti-facebook"></i></a></li>
      <li class="mb-3"><a class="text-white" href="#"><i class="ti-instagram"></i></a></li>
      <li class="mb-3"><a class="text-white" href="#"><i class="ti-dribbble"></i></a></li>
      <li class="mb-3"><a class="text-white" href="#"><i class="ti-twitter"></i></a></li>
    </ul>
    <!-- /social icon -->
  </section>
  <!-- /hero area -->
  
  <!-- about -->
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 mx-auto text-center">
          <p class="font-secondary paragraph-lg text-dark">I am Fauzi Riski, a computer science graduate from University of Lampung in 2021. I have experience in several
            freelancer projects as a so􀅌ware developer. I have an interest in a career in the field of so􀅌ware developer
            because there are many challenge.</p>
          <a href="about.html" class="btn btn-transparent">know more</a>
        </div>
      </div>
    </div>
  </section>
  <!-- /about -->
  
  <!-- skills -->
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-title">Skills</h2>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
          <div class="card shadow text-center">
            <div class="position-relative rounded-top progress-wrapper" data-color="#fdb157">
              <div class="wave" data-progress="80%"></div>
            </div>
            <div class="card-footer bg-white">
              <h4 class="card-title">PHP (80%)</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
          <div class="card shadow text-center">
            <div class="position-relative rounded-top progress-wrapper" data-color="#9473e6">
              <div class="wave" data-progress="60%"></div>
            </div>
            <div class="card-footer bg-white">
              <h4 class="card-title">Javascript (70%)</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
          <div class="card shadow text-center">
            <div class="position-relative rounded-top progress-wrapper" data-color="#bdecf6">
              <div class="wave" data-progress="80%"></div>
            </div>
            <div class="card-footer bg-white">
              <h4 class="card-title">Database(MySQL) (80%)</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
          <div class="card shadow text-center">
            <div class="position-relative rounded-top progress-wrapper" data-color="#ffbcaa">
              <div class="wave" data-progress="70%"></div>
            </div>
            <div class="card-footer bg-white">
              <h4 class="card-title">Android Development (70%)</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /skills -->
  
  <!-- experience -->
  <section class="section">
    <div class="container">
      <div class="row justify-content-around">
        <div class="col-lg-12 text-center">
          <h2 class="section-title">Experience</h2>
        </div>
        <div class="col-lg-3 col-md-4 text-center">
          <img src="client/images/experience/icon-1.png" alt="icon">
          <p class="mb-0">icoffee.id</p>
          <h4>Web Developer</h4>
          <h6 class="text-light">Marketplace and Auction Feature</h6>
        </div>
        <div class="col-lg-3 col-md-4 text-center">
          <img src="client/images/experience/icon-2.png" alt="icon">
          <p class="mb-0">polrestabandarlampung.com</p>
          <h4>Full Stack Developer</h4>
          <h6 class="text-light">Consultation feature</h6>
        </div>
        <div class="col-lg-3 col-md-4 text-center">
          <img src="client/images/experience/icon-3.png" alt="icon">
          <p class="mb-0">My Doctor</p>
          <h4>React Native Developer</h4>
          <h6 class="text-light">Full Module</h6>
        </div>
      </div>
    </div>
  </section>
  <!-- ./experience -->
  
  <!-- education -->
  <section class="section position-relative">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-title">Education</h2>
        </div>
        <div class="col-lg-6 col-md-6 mb-80">
          <div class="d-flex">
            <div class="mr-lg-5 mr-3">
              <i class="ti-medall icon icon-light icon-bg bg-white shadow rounded-circle d-block"></i>
            </div>
            <div>
              <p class="text-dark mb-1">2014-2017</p>
              <h4>Senior High School</h4>
              <p class="mb-0 text-light">3 Bandar Lampung Senior High School</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 mb-80">
          <div class="d-flex">
            <div class="mr-lg-5 mr-3">
              <i class="ti-medall icon icon-light icon-bg bg-white shadow rounded-circle d-block"></i>
            </div>
            <div>
              <p class="text-dark mb-1">2017-2021</p>
              <h4>Sarjana Komputer</h4>
              <p class="mb-0 text-light">Computer Science, University of Lampung</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- bg image -->
    <img class="img-fluid edu-bg-image w-100" src="client/images/backgrounds/education-bg.png" alt="bg-image">
  </section>
  <!-- /education -->
  
  <!-- services -->
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2 class="section-title">Services</h2>
        </div>
        <div class="col-md-4 mb-4 mb-md-0">
          <div class="card hover-shadow shadow">
            <div class="card-body text-center px-4 py-5">
              <i class="ti-html5 icon mb-5 d-inline-block"></i>
              <h4 class="mb-4">Website Development</h4>
              <p>We offering your business to reach wider people. Web development is one of the leading and 
                significant parts of digital marketing nowadays to enhance your business.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4 mb-md-0">
          <div class="card active-bg-primary hover-shadow shadow">
            <div class="card-body text-center px-4 py-5">
              <i class="ti-book icon mb-5 d-inline-block"></i>
              <h4 class="mb-4">Training & Tutoring</h4>
              <p>
                We provide training in application development that you can use as a learning medium</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4 mb-md-0">
          <div class="card hover-shadow shadow">
            <div class="card-body text-center px-4 py-5">
              <i class="ti-android icon mb-5 d-inline-block"></i>
              <h4 class="mb-4">Android Development</h4>
              <p>
                We offering you convenience in running your business. 
                Android development is a way to get your clients interested in the business you run.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /services -->
  
  <!-- portfolio -->
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2 class="section-title">Portfolio</h2>
        </div>
      </div>
      <div class="row shuffle-wrapper">
        <div class="col-lg-4 col-6 mb-4 shuffle-item">
          <div class="position-relative rounded hover-wrapper">
            <img src="client/images/portfolio/LOGO.png" alt="portfolio-image" class="img-fluid rounded w-100">
            <div class="hover-overlay">
              <div class="hover-content">
                <a class="btn btn-light btn-sm" href="project-single.html">view project</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6 mb-4 shuffle-item">
          <div class="position-relative rounded hover-wrapper">
            <img src="client/images/portfolio/R.png" alt="portfolio-image" class="img-fluid rounded w-100">
            <div class="hover-overlay">
              <div class="hover-content">
                <a class="btn btn-light btn-sm" href="project-single.html">view project</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6 mb-4 shuffle-item">
          <div class="position-relative rounded hover-wrapper">
            <img src="client/images/portfolio/my_doctor.png" alt="portfolio-image" class="img-fluid rounded w-100">
            <div class="hover-overlay">
              <div class="hover-content">
                <a class="btn btn-light btn-sm" href="project-single.html">view project</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /portfolio -->
  
  
  
  <!-- blog -->
  <section class="section position-relative">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2 class="section-title">Blogs</h2>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
          <article class="card shadow">
            <img class="rounded card-img-top" src="client/images/blog/post-3.jpg" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="/blog-single">Amazon increase income 1.5 Million</a>
              </h4>
              <p class="cars-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et
                dolore magna aliqua.</p>
              <a href="/blog-single" class="btn btn-xs btn-primary">Read More</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
          <article class="card shadow">
            <img class="rounded card-img-top" src="client/images/blog/post-4.jpg" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="/blog-single">Amazon increase income 1.5 Million</a>
              </h4>
              <p class="cars-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et
                dolore magna aliqua.</p>
              <a href="/blog-single" class="btn btn-xs btn-primary">Read More</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
          <article class="card shadow">
            <img class="rounded card-img-top" src="client/images/blog/post-2.jpg" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="/blog-single">Amazon increase income 1.5 Million</a>
              </h4>
              <p class="cars-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et
                dolore magna aliqua.</p>
              <a href="/blog-single" class="btn btn-xs btn-primary">Read More</a>
            </div>
          </article>
        </div>
      </div>
      
    </div>
    <img class="img-fluid edu-bg-image w-100" src="client/images/backgrounds/education-bg.png" alt="bg-image">
  </section>
  <!-- /blog -->
  
  <!-- contact -->
  <section class="section section-on-footer">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2 class="section-title">Contact Info</h2>
        </div>
        <div class="col-lg-8 mx-auto">
          <div class="bg-white rounded text-center p-5 shadow-down">
            <h4 class="mb-80">Contact Form</h4>
            <form action="#" class="row">
              <div class="col-md-6">
                <input type="text" id="name" name="name" placeholder="Full Name" class="form-control px-0 mb-4">
              </div>
              <div class="col-md-6">
                <input type="email" id="email" name="email" placeholder="Email Address" class="form-control px-0 mb-4">
              </div>
              <div class="col-12">
                <textarea name="message" id="message" class="form-control px-0 mb-4"
                  placeholder="Type Message Here"></textarea>
              </div>
              <div class="col-lg-6 col-10 mx-auto">
                <button class="btn btn-primary w-100">send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /contact -->
    
@endsection