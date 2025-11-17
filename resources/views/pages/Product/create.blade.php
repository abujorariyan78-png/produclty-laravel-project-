@extends('layout.Dashboard_layout')

@section('content')

<main>
                    <div class="container-fluid px-4 main">
                          @include('alart.message')
                        <h1 class="mt-4">Product Maneger</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.page') }}">Products Maneger</a></li>
                            <li class="breadcrumb-item active">Product</li>
                        </ol>

                        <form action="{{ route('products.page.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-4">
                                    <div>
                                        <h3>Image</h3>
                                        <img style="height: 30vh" src="{{ asset('assets/img/manager.png') }}" alt=""class="img-thumbnail" id="prevImage">
                                        <input type="file" name="manager_image" oninput="prevImage.src=window.URL.createObjectURL(this.files[0])" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <label for="header">Header</label>
                                        <input type="text" name="header" id="header" class="form-control">
                                    </div>
                                    <div>
                                        <label for="sub_header">Sub Header</label>
                                        <input type="text" name="sub_header" id="sub_header" class="form-control">
                                    </div>
                                    <div>
                                        <label for="para">Pharagraph</label>
                                        <input type="text" name="para" id="para" class="form-control">
                                    </div>
                                    <div>
                                        <label for="title1">Title 1</label>
                                        <input type="text" name="title1" id="title1" class="form-control">
                                    </div>
                                      <div>
                                        <label for="title2">Title 2</label>
                                        <input type="text" name="title2" id="title2" class="form-control">
                                    </div>
                                      <div>
                                        <label for="title3">Title 3</label>
                                        <input type="text" name="title3" id="title3" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-success m-5" >
                        </form>

                        
                       
                </main>

@endsection