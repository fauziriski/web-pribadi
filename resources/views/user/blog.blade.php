@extends('user.layouts.app')
@section('title', 'Fauzi Riski | Blog')
@section('content')

<!-- page title -->
<section class="page-title bg-primary position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="text-white font-tertiary">Blogs</h1>
            </div>
        </div>
    </div>
    <!-- background shapes -->
    <img src="{{ asset('client/images/illustrations/page-title.png') }}" alt="illustrations" class="bg-shape-1 w-100">
    <img src="{{ asset('client/images/illustrations/leaf-pink-round.png') }}" alt="illustrations" class="bg-shape-2">
    <img src="{{ asset('client/images/illustrations/dots-cyan.png') }}" alt="illustrations" class="bg-shape-3">
    <img src="{{ asset('client/images/illustrations/leaf-orange.png') }}" alt="illustrations" class="bg-shape-4">
    <img src="{{ asset('client/images/illustrations/leaf-yellow.png') }}" alt="illustrations" class="bg-shape-5">
    <img src="{{ asset('client/images/illustrations/dots-group-cyan.png') }}" alt="illustrations" class="bg-shape-6">
    <img src="{{ asset('client/images/illustrations/leaf-cyan-lg.png') }}" alt="illustrations" class="bg-shape-7">
</section>
<!-- /page title -->

<!-- blog -->
<section class="section">
    <div class="container">
        <div class="row">
            @foreach ($posts as $data)
                <div class="col-lg-4 col-sm-6 mb-4">
                    <article class="card shadow">
                        <img class="rounded card-img-top" src="{{ asset('storage/uploads/blog/' . $data->thumbnail) }}"
                            width="330" height="240.16" alt="post-thumb">
                        <div class="card-body">
                            <h4 class="card-title"><a class="text-dark"
                                    href="/blog-single/{{ $data->slug }}">{{ $data->title }}</a>
                            </h4>
                            {{-- <p class="cars-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                  incididunt ut labore et
                  dolore magna aliqua.</p> --}}
                            <a href="/blog-single/{{ $data->slug }}" class="btn btn-xs btn-primary">Read More</a>
                        </div>
                    </article>
                </div>
            @endforeach

        </div>

        {{ $posts->links() }}


    </div>
    </div>
</section>
<!-- /blog -->


<!-- contact -->
<section class="section section-on-footer" data-background="client/images/backgrounds/bg-dots.png">
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
                            <input type="text" id="name" name="name" placeholder="Full Name"
                                class="form-control px-0 mb-4">
                        </div>
                        <div class="col-md-6">
                            <input type="email" id="email" name="email" placeholder="Email Address"
                                class="form-control px-0 mb-4">
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
