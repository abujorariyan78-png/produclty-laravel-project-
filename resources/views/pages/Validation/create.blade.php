@extends('layout.Dashboard_layout')

@section('content')

<main>
                    <div class="container-fluid px-4 main">
                          @include('alart.message')
                        <h1 class="mt-4">Effortless Validation for</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.page') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Validation</li>
                        </ol>

                        <form action="{{ route('store.validation.page') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-md-4">
                                    <div>
                                        <h3>Image</h3>
                                        <img src="{{ asset('assets/img/validation.png') }}" alt="" c style="height: 30vh">
                                        <input type="file" name="image" oninput="prevImage.src=window.URL.createObjectURL(this.files[0])" >
                                    </div>

                                </div>

                                <div class="col-md-4">
                                    <div>
                                        <label for="header">Header</label>
                                        <input type="text" name="header" id="header" class=" form-control">
                                    </div>
                                     <div>
                                        <label for="sub_header">Sub Header</label>
                                        <input type="text" name="sub_header" id="sub_header" class=" form-control">
                                    </div>
                                     <div>
                                        <label for="title">Title 1</label>
                                        <input type="text" name="title1" id="title1" class=" form-control">
                                    </div>
                                     <div>
                                        <label for="sub_title">Sub Title 1</label>
                                        <input type="text" name="sub_title1" id="sub_title1" class=" form-control">
                                    </div>
                                     <div>
                                        <label for="title">Title 2</label>
                                        <input type="text" name="title2" id="title2" class=" form-control">
                                    </div>
                                     <div>
                                        <label for="sub_title">Sub Title 2</label>
                                        <input type="text" name="sub_title2" id="sub_title2" class=" form-control">
                                    </div>
                                     <div>
                                        <label for="title">Title 3</label>
                                        <input type="text" name="title3" id="title3" class=" form-control">
                                    </div>
                                     <div>
                                        <label for="sub_title">Sub Title 3</label>
                                        <input type="text" name="sub_title3" id="sub_title3" class=" form-control">
                                    </div>
                                     
                                    
                                </div>
                            </div>
                        
                        <input type="submit" class="btn btn-primary">
                        
                        </form>

                        
                       
                </main>

@endsection