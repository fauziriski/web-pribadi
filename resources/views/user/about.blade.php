@extends('user.layouts.app')
@section('title', 'Fauzi Riski | About')
@section('content')
    

    <!-- page title -->
<section class="page-title-alt bg-primary position-relative">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="text-white font-tertiary">About Me</h1>
        </div>
      </div>
    </div>
    <!-- background shapes -->
    <img src="{{ asset('client/images/illustrations/leaf-bg-top.png') }}" alt="illustrations" class="bg-shape-1 w-100">
    <img src="{{ asset('client/images/illustrations/dots-group-sm.png') }}" alt="illustrations" class="bg-shape-2">
    <img src="{{ asset('client/images/illustrations/leaf-yellow.png"') }} alt="illustrations" class="bg-shape-3">
    <img src="{{ asset('client/images/illustrations/leaf-orange.png"') }} alt="illustrations" class="bg-shape-4">
    <img src="{{ asset('client/images/illustrations/dots-group-cyan.png') }}" alt="illustrations" class="bg-shape-5">
    <img src="{{ asset('client/images/illustrations/leaf-cyan-lg.png') }}" alt="illustrations" class="bg-shape-6">
  </section>
  <!-- /page title -->
  
  <!-- about -->
  <section class="section pt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <p>Hello, my name is Fauzi Riski, and I am a software developer. I am graduated at from University of 
            Lampung in 2021. This is my portfolio website. In this website you can see my freelance project and 
            some tutorial about programming. I hope this website can help you get to know more about myself, and 
            help you learn about software developers. Feel free to check out my Linked in page as well at: 
            <a href="https://www.linkedin.com/in/fauzi-riski-611273170/">https://www.linkedin.com/in/fauzi-riski-611273170/</a> </p>
        </div>
        <div class="col-md-4 text-center drag-lg-top">
          <div class="shadow-down mb-4">
            <img src="{{ asset('client/images/about/1500949401046.jpg') }}" alt="author" class="img-fluid w-100 rounded-lg border-thick border-white">
          </div>
          <h4>Fauzi Riski</h4>
        </div>
      </div>
    </div>
  </section>
  <!-- /about -->
  
  <!-- Work Process -->
  <section class="section">
    <div class="container">
      <div class="row justify-content-around">
        <div class="col-lg-12 text-center">
          <h2 class="section-title">Work Process</h2>
        </div>
        <div class="col-lg-3 col-md-4 text-center hover-shadow pt-3">
          <div class="">
            <img src="client/images/icons/plan.png" class="mb-4" alt="icon">
            <h4 class="mb-4">Research and Plan</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 text-center hover-shadow pt-3">
          <img src="client/images/icons/design.png" class="mb-4" alt="icon">
          <h4 class="mb-4">Design and Develop</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.</p>
        </div>
        <div class="col-lg-3 col-md-4 text-center hover-shadow pt-3">
          <img src="client/images/icons/test.png" class="mb-4" alt="icon">
          <h4 class="mb-4">Test</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- ./Work Process -->
  
  <!-- team -->
  <section class="section bg-cover" data-background="images/backgrounds/team-bg.png">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2 class="section-title">Skills</h2>
        </div>
        <div class="col-md-6 col-sm-12 mb-4 mb-md-4">
          <h4><strong>MySQL</strong></h4>
          <div class="progress">
            <div class="progress-bar progress-bar-striped" role="progressbar" 
            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 80%; background-color: #22fed8;"></div>
          </div>
        </div>
        <div class="col-md-6 col-sm-12 mb-4 mb-md-4">
          <h4><strong>PHP</strong></h4>
          <div class="progress">
            <div class="progress-bar progress-bar-striped" role="progressbar" 
            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%; background-color: #fdb157;"></div>
          </div>
        </div>
        <div class="col-md-6 col-sm-12 mb-4 mb-md-4">
          <h4><strong>Javascript</strong></h4>
          <div class="progress">
            <div class="progress-bar progress-bar-striped" role="progressbar" 
            aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%; background-color: #9473e6;"></div>
          </div>
        </div>
        <div class="col-md-6 col-sm-12 mb-4 mb-md-4">
          <h4><strong>Bootstrap</strong></h4>
          <div class="progress">
            <div class="progress-bar progress-bar-striped" role="progressbar" 
            aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%; background-color: #bdecf6;"></div>
          </div>
        </div>
        <div class="col-md-6 col-sm-12 mb-4 mb-md-4">
          <h4><strong>Flutter</strong></h4>
          <div class="progress">
            <div class="progress-bar progress-bar-striped" role="progressbar" 
            aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%; background-color: #ffbcaa;"></div>
          </div>
        </div>
        <div class="col-md-6 col-sm-12 mb-4 mb-md-4">
          <h4><strong>React Native</strong></h4>
          <div class="progress">
            <div class="progress-bar progress-bar-striped" role="progressbar" 
            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%; background-color: #FC95C9;"></div>
          </div>
        </div>
  
      </div>
    </div>
  </section>
  <!-- /team -->
  
  <!-- clients -->
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2 class="section-title">My Clients</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="client-logo-slider d-flex align-items-center">
            <a href="#" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
                src="client/images/portfolio/LOGO.png" style="height: 80px;" alt="client-logo"></a>
            <a href="#" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
                src="client/images/portfolio/R.png" style="height: 80px;" alt="client-logo"></a>
            <a href="#" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
                src="client/images/portfolio/my_doctor.png" style="height: 80px;" alt="client-logo"></a>
            <a href="#" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
                src="client/images/portfolio/unila.png" style="height: 80px;" alt="client-logo"></a>
            <a href="#" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
                src="client/images/portfolio/LOGO.png" style="height: 80px;" alt="client-logo"></a>
            <a href="#" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
                src="client/images/portfolio/R.png" style="height: 80px;" alt="client-logo"></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /clients -->
  
  <!-- contact -->
  <section class="section section-on-footer" data-background="images/backgrounds/bg-dots.png">
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