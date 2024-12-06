@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row flex-row">
                        <div class="col-md-10">
                            <h2 class="m-0">MLG College of Learning, Inc.</h2>
                        </div>
                        <div class="dropdown col-md-1">
                            <button class="btn btn-secondary dropdown-toggle" style="float: right" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Filter
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Staff & Faculty</a></li>
                                <li><a class="dropdown-item" href="#">College Department</a></li>
                                <li><a class="dropdown-item" href="#">High School</a></li>
                            </ul>
                        </div>
                        <div class="dropdown col-md-1">
                            <button class="btn btn-success dropdown-toggle" style="float: right" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Create ID
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item btn btn-primary" data-bs-toggle="modal" data-bs-target="#staffAndFaculty" data-bs-whatever="@mdo" href="#">Staff & Faculty</a></li>
                                <li><a class="dropdown-item btn btn-primary" data-bs-toggle="modal" data-bs-target="#student" data-bs-whatever="@mdo" href="#">Student</a></li>
                            </ul>
                            @include('components.safModal')
                            @include('components.studentModal')
                        </div>
                    </div>

                    <hr class="custom-divider">

                    <div class="row flex-row">
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <p>Shiet</p>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</div>
@endsection
