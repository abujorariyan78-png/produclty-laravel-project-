@extends('layout.Dashboard_layout')

@section('content')

<main>
                    <div class="container-fluid px-4 main">
                          @include('alart.message')
                        <h1 class="mt-4">List of icon</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.page') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Icon</li>
                        </ol>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Sub Title</th>
                                    <th scope="col">Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                    @if (count($super)>0)
                                    @foreach ($super as $super)
                                         <tr>
                                    <td>{{ $super->id }}</td>
                                    <td>{{ $super->title }}</td>
                                    <td>{{ $super->sub_title }}</td>
                                    <td>
                                        <img src="{{ url($super->icon_image) }}" alt="">
                                    </td>
                                    <td>
                                         <div class="row d-flex gap-5">
                                            <div class="col-sm-2">
                                             <a class="btn btn-primary" href="{{ route('power.page.list.edit',$super->id) }}">Edit</a>
                                              </div>
                                              <div class="col-sm-2">
                                                   <form action="" method="POST">
                                                   @csrf
                                                  @method('delete')
                                                   <input type="submit" name="submit" value="Delete" class="btn btn-danger">
                                                     </form>
                                                       </div>
                                                         </div>

                                    </td>
                                </tr>
                                    @endforeach
                                        
                                    @endif
                                   
                            </tbody>
                        </table>



                        
                       
                </main>

@endsection