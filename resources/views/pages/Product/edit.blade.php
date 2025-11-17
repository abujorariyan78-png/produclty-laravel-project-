@extends('layout.Dashboard_layout')

@section('content')

<main>
                    <div class="container-fluid px-4 main">
                          @include('alart.message')
                        <h1 class="mt-4">Edit page of list</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="">Edit</a></li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ol>

                        <form action="{{ route('edit.page.products.update.edit',$porducts->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-4">
                                    <div>
                                        <h3>Image</h3>
                                        <img style="height: 30vh" src="{{ url($porducts->manager_image) }}" alt=""class="img-thumbnail" id="prevImage">
                                        <input type="file" name="manager_image" oninput="prevImage.src=window.URL.createObjectURL(this.files[0])" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <label for="header">Header</label>
                                        <input type="text" name="header" id="header" class="form-control" value="{{ $porducts->header }}">
                                    </div>
                                    <div>
                                        <label for="sub_header">Sub Header</label>
                                        <input type="text" name="sub_header" id="sub_header" class="form-control" value="{{ $porducts->sub_header }}">
                                    </div>
                                    <div>
                                        <label for="para">Pharagraph</label>
                                        <input type="text" name="para" id="para" class="form-control" value="{{ $porducts->para }}">
                                    </div>
                                    <div>
                                        <label for="title1">Title 1</label>
                                        <input type="text" name="title1" id="title1" class="form-control" value="{{ $porducts->title1 }}">
                                    </div>
                                      <div>
                                        <label for="title2">Title 2</label>
                                        <input type="text" name="title2" id="title2" class="form-control" value="{{ $porducts->title2 }}">
                                    </div>
                                      <div>
                                        <label for="title3">Title 3</label>
                                        <input type="text" name="title3" id="title3" class="form-control" value="{{ $porducts->title3 }}">
                                    </div>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-success m-5" >
                        </form>

                        
                       
                </main>

@endsection