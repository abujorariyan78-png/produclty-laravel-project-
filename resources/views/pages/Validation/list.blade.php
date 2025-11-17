@extends('layout.Dashboard_layout')

@section('content')

<main>
                    <div class="container-fluid px-4 main">
                          @include('alart.message')
                        <h1 class="mt-4">List of icon</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                            <li class="breadcrumb-item active">Icon</li>
                        </ol>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title 1</th>
                                    <th scope="col">Sub Title 1</th>
                                    <th scope="col">Title 2</th>
                                    <th scope="col">Sub Title 2</th>
                                    <th scope="col">Title 3</th>
                                    <th scope="col">Sub Title 3</th>
                                    <th scope="col"> header</th>
                                    <th scope="col"> sub_header </th>
                                    <th scope="col">Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                   
                                
                                         <tr>
                                    <td>{{ $validation->id }}</td>
                                    <td>{{ $validation->title1 }}</td>
                                    <td>{{ $validation->sub_title1 }}</td>
                                    <td>{{ $validation->title2 }}</td>
                                    <td>{{ $validation->sub_title2 }}</td>
                                    <td>{{ $validation->title3 }}</td>
                                    <td>{{ $validation->sub_title3 }}</td>
                                    <th>{{ $validation->header }}</th>
                                    <th>{{ $validation->sub_header }}</th>
                                    <td>
                                        <img style="height: 10vh" src="{{ url($validation->image) }}" alt="">
                                    </td>
                                    <td>
                                         <div class="row d-flex gap-2 mx-auto">
                                            <div class="col-sm-2">
                                             <a class="btn btn-primary" href="{{ route('validation.edit',$validation->id) }}">Edit</a>
                                              </div>
                                              <div class="col-sm-">
                                                   <form action="{{ route('delete.list',$validation->id) }}" method="POST">
                                                   @csrf
                                                  @method('delete')
                                                   <input type="submit" name="submit" value="Delete" class="btn btn-danger">
                                                     </form>
                                                       </div>
                                                         </div>

                                    </td>
                                </tr>
                                  
                                   
                            </tbody>
                        </table>



                        
                       
                </main>

@endsection