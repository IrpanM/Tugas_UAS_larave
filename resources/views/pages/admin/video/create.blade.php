@extends('layouts.admin')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">video</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Info</a></li>
                    <li class="breadcrumb-item active">Create</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create video</h3>
            </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="{{ route('video.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control" id="image" placeholder="Enter Image">
                    </div>
                    <div class="form-group">
                        <label for="text">title</label>
                        <textarea name="title" id="title" class="form-control" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">date</label>
                        <input type="date" name="date" class="form-control" id="date" placeholder="Enter kategori">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- /.content -->

@endsection
