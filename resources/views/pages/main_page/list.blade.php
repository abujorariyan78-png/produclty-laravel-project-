@extends('layout.Dashboard_layout')

@section('content')

<main>
                    <div class="container-fluid px-4 main">
                          @include('alart.message')
                        <h1 class="mt-4">List of main</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                            <li class="breadcrumb-item active">List</li>
                        </ol>

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title </th>
                                <th scope="col">Sub Title</th>
                                <th scope="col">Main Image</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @if (count($main)>0)
                                @foreach ($main as $main )
                                    <tr>
                                    <td>{{ $main->id }}</td>
                                    <td>{{ $main->title }}</td>
                                    <td>{{ $main->sub_title }}</td>
                                    <td>
                                        <img style="height: 10vh" src="{{ url($main->main_image) }}" alt="">
                                    </td>
                                    <th>
                                        <div class="row d-flex gap-5">
                                            <div class="col-sm-2">
                                             <a class="btn btn-primary" href="{{ route('list.edit',$main->id) }}">Edit</a>
                                              </div>
                                              <div class="col-sm-2">
                                                   <form action="{{ route('list.delete',$main->id) }}" method="POST">
                                                   @csrf
                                                  @method('delete')
                                                   <input type="submit" name="submit" value="Delete" class="btn btn-danger">
                                                     </form>
                                                       </div>
                                                         </div>
                                    </th>
                                </tr>
                                @endforeach                                    
                                @endif
                                
                            </tbody>
                        </table>

                        
                       
                </main>

@endsection