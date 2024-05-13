@extends('layouts.app')

@section('content')
   <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>List of news</h1>
            </div>
            <div class="col-lg-12 text-center">
                @foreach ($response as $key => $res)
                         @include('components.cards.newsCard',['res' => $res])
                @endforeach
            </div>
        </div>
   </div>
@endsection


@push('css')
<style>
    .page-title{
        padding-top:10vh;
        font-size:2rem;
        color:red;
    }
</style>
@endpush
