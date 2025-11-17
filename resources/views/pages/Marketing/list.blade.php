@extends('layout.Dashboard_layout')

@section('content')

<main>
                    <div class="container-fluid px-4 main">
                          @include('alart.message')
                        <h1 class="mt-4">List of marketing</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                            <li class="breadcrumb-item active">Marketing</li>
                        </ol>

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">sub Title</th>
                                <th scope="col">Card Image</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @if (count ($marketing)>0)
                                @foreach ($marketing as $marketing)
                                     <tr>
                                    <td colspan="row">{{ $marketing->id }}</td>
                                    <td>{{ $marketing->title }}</td>
                                    <td>{{ $marketing->sub_title }}</td>
                                    <td>
                                        <img style="height: 10vh" src="{{ url($marketing->card_image) }}" alt="">
                                    </td>
                                    <td>
                                         <div class="row d-flex gap-2 ms-auto">
                                        <div class="col-sm2">
                                            <a class="btn btn-warning" href="{{ route('edit.marketing',$marketing->id) }}">Edit</a>
                                        </div>
                                        <div class="col-sm">
                                            <form action="{{ route('delete.marketing',$marketing->id) }}" method="POST" >
                                                @csrf
                                                @method('delete')

                                                <input type="submit" name="submit" value="delete" class="btn btn-danger">

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