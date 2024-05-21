@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-lg-12">
                <h1 class="col-lg-12 page-title text-center">
                    {{ $response['title'] }}
                </h1>

            </div>
            <hr></hr>
            <div class="col-lg-12 gap-3 pb-3 pt-3">
               <a href=""><i class="fa-regular fa-trash-can fa-xl" style="color: #616161;" onmouseover="this.style.color='#FF0000'" onmouseout="this.style.color='#616161'"></i></a>
               <a href="{{ route('news.editNews',$response['id']) }}"><i class="fa-solid fa-pen-to-square fa-xl ms-2" style="color: #616161;" onmouseover="this.style.color='#00FF00'" onmouseout="this.style.color='#616161'"></i></a>

            </div>
            <hr></hr>
            <div class="col-lg-12 justify-content-center">
                <p>{{ $response['content'] }}</p>
            </div>
            <hr></hr>
            <div>
                <div class="row d-flex">
                    <div class="col-lg-6"><p>Author: {{ $response['autherName'] }}</p></div>
                    <div class="col-lg-6"><p>news category: {{ $response['newsType'] }}</p></div>
                </div>
            </div>
            </div>
        </div>
    </div>

@push('css')
    <style>
        .page-title {
            padding-top:10vh;
            font-size:2rem;
            color:rgb(0, 113, 206);
        }
    </style>

@endpush
@endsection
