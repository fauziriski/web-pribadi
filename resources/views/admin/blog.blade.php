@extends('admin.layouts.app')
@section('title')
<title>Blog &mdash; Fauzi Riski</title>
@endsection
@section('content')

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Posts</h1>
                <div class="section-header-button">
                    <a href="{{ route('admin.blog.create') }}" class="btn btn-primary">Add New</a>
                </div>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Posts</a></div>
                    <div class="breadcrumb-item">All Posts</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Posts</h2>
                <p class="section-lead">
                    You can manage all posts, such as editing, deleting and more.
                </p>
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>All Posts</h4>
                            </div>
                            <div class="card-body">

                                <div class="clearfix mb-3"></div>

                                <div class="table-responsive">
                                    <table id="myTable" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center pt-2">
                                                    <div class="custom-checkbox custom-checkbox-table custom-control">
                                                        <input type="checkbox" data-checkboxes="mygroup"
                                                            data-checkbox-role="dad" class="custom-control-input"
                                                            id="checkbox-all">
                                                        <label for="checkbox-all"
                                                            class="custom-control-label">&nbsp;</label>
                                                    </div>
                                                </th>
                                                <th>Title</th>
                                                <th>Category</th>
                                                <th>Author</th>
                                                <th>Created At</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($post as $data => $value)
                                                <tr>
                                                    <th class="text-center">
                                                        <div
                                                            class="custom-checkbox custom-checkbox-table custom-control mr-3 ml-1">
                                                            <input type="checkbox" data-checkboxes="mygroup"
                                                                class="custom-control-input" value="{{ $value->id }}"
                                                                id="checkbox-2">
                                                            <label for="checkbox-2"
                                                                class="custom-control-label">&nbsp;</label>
                                                        </div>
                                                    </th>
                                                    <td>{{ $value->title }}
                                                        <div class="table-links">
                                                            <a href="/blog-single/{{ $value->slug }}">View</a>
                                                            <div class="bullet"></div>
                                                            <a href="/web-admin/blog/{{ $value->id }}/edit">Edit</a>
                                                            <div class="bullet"></div>
                                                            <a href="#" class="text-danger">Trash</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#">{{ $value->category->category }}</a>
                                                    </td>
                                                    <td>
                                                        <a href="#">
                                                            <img alt="image" src="{{ asset('admin/assets/img/avatar/avatar-5.png') }}"
                                                                class="rounded-circle" width="35" data-toggle="title"
                                                                title="">
                                                            <div class="d-inline-block ml-1">{{ $value->user->name }}
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td>{{ $value->created_at }}</td>
                                                    <td>
                                                        @if ($value->status == 'draft')
                                                            <div class="badge badge-danger">Draft</div>
                                                        @elseif ($value->status == 'pending')
                                                            <div class="badge badge-warning">Pending</div>
                                                        @elseif ($value->status == 'trash')
                                                            <div class="badge badge-secondary">Trash</div>
                                                        @else
                                                            <div class="badge badge-primary">Published</div>
                                                        @endif

                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>



    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
@endsection
