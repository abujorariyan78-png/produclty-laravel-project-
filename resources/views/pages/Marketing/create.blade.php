@extends('layout.Dashboard_layout')

@section('content')

<main>
                    <div class="container-fluid px-4 main">
                          @include('alart.message')
                        <h1 class="mt-4">Marketing Strategis</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                            <li class="breadcrumb-item active">Marketing</li>
                        </ol>

                        <form action="{{ route('store.page.marketing') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-4">
                                    <div>
                                        <h3>Card Image</h3>
                                        <img src="{{ asset('assets/img/marketing01.png') }}" alt=""  class="img-thumbnail" id="prevImage" style="height: 30vh">

                                        <input type="file" name="card_image" id="card_image"  class=" mt-3" oninput="prevImage.src=window.URL.createObjectURL(this.files[0])" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <label for="title">Title</label>
                                        <input type="text" name="title" id="title" class="form-control">
                                    </div>
                                    <div>
                                        <label for="sub_title">Sub Title</label>
                                        <input type="text" name="sub_title" id="sub_title" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-success d-block m-auto">
                        </form>

                        
                       
                </main>

@endsection