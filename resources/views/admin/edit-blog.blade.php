@extends('admin.layouts.app')
@section('title')
<title>Edit Blog &mdash; Fauzi Riski</title>
@endsection
@section('content')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Edit Post</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Posts</a></div>
                <div class="breadcrumb-item">Edit Post</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Edit Post</h2>
            <p class="section-lead">
                On this page you can edit a post and fill in all fields.
            </p>
            <form action="/web-admin/blog/update" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Write Your Post</h4>
                            </div>
                            <input type="hidden" name="id" value="{{ $post->id }}">
                            <div class="card-body">
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="title" value="{{ $post->title }}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label
                                        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select name="category" class="form-control selectric">
                                            <option selected value="{{ $post->category_id }}">{{ $post->category->category }}</option>
                                            @foreach ($category as $data)
                                            <option value="{{ $data->id }}">{{ $data->category }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea id="konten" class="form-control" name="content" rows="10" cols="50">
                                            {{ $post->content }}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label
                                        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Thumbnail</label>
                                    <div class="col-sm-12 col-md-7">
                                        <div id="image-preview" class="image-preview" style="background-image: url({{ asset('storage/uploads/blog/'. $post->thumbnail) }}); background-size: cover; background-position: center center;">
                                            <label for="image-upload" id="image-label">Choose File</label>
                                            <input value="" name="thumbnail" type="file" id="image-upload" />
                                            <input value="{{ $post->thumbnail }}" name="thumbnail_old" type="hidden" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tags</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input name="tag" type="text" value="{{ $post->tags }}" class="form-control inputtags">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select name="status" class="form-control selectric">
                                            <option class="text-capitalize" value="{{ $post->status }}">{{ $post->status }}</option>
                                            <option value="publish">Publish</option>
                                            <option value="draft">Draft</option>
                                            <option value="pending">Pending</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button class="btn btn-primary">Edit Post</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>

@endsection

@section('js')

<link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/jquery-selectric/selectric.css">
<link href="{{ asset('ckeditor/plugins/codesnippet/lib/highlight/styles/default.css') }}" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://demo.getstisla.com/assets/modules/jquery-selectric/jquery.selectric.min.js"></script>
<script src="https://demo.getstisla.com/assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script src="https://demo.getstisla.com/assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js"></script>

<script src="https://demo.getstisla.com/assets/js/page/features-post-create.js"></script>
<script src="{{ asset('ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js') }}"></script>
<script>hljs.initHighlightingOnLoad();</script>
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>

<script>
   var konten = document.getElementById("konten");
     CKEDITOR.replace(konten,{
         
     language:'en-gb'
   });
   CKEDITOR.config.allowedContent = true;
</script>

@endsection
