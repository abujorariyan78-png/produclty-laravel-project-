@extends('layout.Dashboard_layout')

@section('content')
 

<main>
                    <div class="container-fluid px-4 main">
                        @include('alart.message')
                        <h1 class="mt-4">Main Page</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                            <li class="breadcrumb-item active">Create Page</li>
                        </ol>

                        <form action="{{ route('store.create') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-4">
                                    <div>
                                        <h3>Image</h3>
                                        <img src="{{ asset('assets/img/hero-img.png') }}" alt=""  class="img-thumbnail" id="prevImage" style="height: 30vh">

                                        <input type="file" name="main_image" id="main_image"  class=" mt-3" oninput="prevImage.src=window.URL.createObjectURL(this.files[0])" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <label for="title">Title</label>
                                        <input type="text" name="title" id="title" class="form-control">
                                    </div>
                                     <div>
                                        <label for="sub_title">Sub_Title</label>
                                        <input type="text" name="sub_title" id="sub_title" class="form-control">
                                    </div>
                                </div>
                                
                            </div>
                            <input type="submit" class="btn btn-primary " style="display: block; margin:0px auto;">
                        </form>
                       
                </main>

@endsection