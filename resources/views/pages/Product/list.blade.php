@extends('layout.Dashboard_layout')

@section('content')

<main>
                    <div class="container-fluid px-4 main">
                          @include('alart.message')
                        <h1 class="mt-4">The list of products </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.page') }}">List</a></li>
                            <li class="breadcrumb-item active">List</li>
                        </ol>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Header</th>
                                    <th scope="col">Sub Header </th>
                                    <th scope="col">Pharagraph</th>
                                    <th scope="col">Title 1</th>
                                    <th scope="col">Title 2</th>
                                    <th scope="col">Title 3</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $porducts->id }}</td>
                                    <td>{{ $porducts->header }}</td>
                                    <td>{{ $porducts->sub_header }}</td>
                                    <td>{{ $porducts->para }}</td>
                                    <td>{{ $porducts->title1 }}</td>
                                    <td>{{ $porducts->title2 }}</td>
                                    <td>{{ $porducts->title3 }}</td>
                                    <td>
                                        <img style="height: 10vh" class="image-fluid" src="{{ url($porducts->manager_image) }}" alt="">
                                    </td>
                                    <td>
                                        <div class="row d-flex gap-2 ms-auto">
                                        <div class="col-sm2">
                                            <a class="btn btn-warning" href="{{ route('edit.page.products',$porducts->id) }}">Edit</a>
                                        </div>
                                        <div class="col-sm">
                                            <form action="{{ route('list.page.item.delete',$porducts->id) }}" method="POST" >
                                                @csrf
                                                @method('delete')

                                                <input type="submit" name="submit" value="delete" class="btn btn-danger">

                                            </form>
                                        </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                       
                </main>

@endsection


 