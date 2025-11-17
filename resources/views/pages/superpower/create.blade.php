@extends('layout.Dashboard_layout')

@section('content')

<main>
                    <div class="container-fluid px-4 main">
                          @include('alart.message')
                        <h1 class="mt-4">Superpower</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.page') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Superpower</li>
                        </ol>

                        <form action="{{ route('upload.page.power') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-4">
                                    <div>
                                        <h3>Image</h3>
                                        <img src="{{ asset('assets/img/icon1.png') }}" alt="" id="prevImage">
                                        <input type="file" name="icon_image"   oninput="prevImage.src=window.URL.createObjectURL(this.files[0])">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <label for="title">Title</label>
                                        <input type="text" name="title" id="title" class=" form-control">
                                    </div>
                                     <div>
                                        <label for="sub_title">Sub Title</label>
                                        <input type="text" name="sub_title" id="sub_title" class=" form-control">
                                    </div>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary m-5">
                        </form>

                        
                       
                </main>

@endsection