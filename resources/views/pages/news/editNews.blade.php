@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-lg-12">
                <h1 class="col-lg-12 page-title text-center">
                    Edit news
                </h1>
            </div>
            <div class="col-lg-12 justify-content-center">
                <form action="{{ route('news.update', $response['id']) }}" method="post" enctype="multipart/form-data">
                   @csrf
                   @method('PUT') <!-- Spoof the PUT method -->

                    <div class="mb-3">
                      <label for="" class="form-label">News Title </label>
                      <input type="text" class="form-control" value="{{ $response['title'] }}"  name="title"  id="" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Content</label>
                        <textarea class="form-control"   name="content" id="exampleFormControlTextarea1" rows="3">{{ $response['content'] }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Author Name </label>
                        <input type="text" value="{{ $response['autherName'] }}" class="form-control" name="autherName"  id="" >
                    </div>
                  <div class="row d-flex ">
                    <div class="col-lg-6 mb-3">
                        <label for="" class="form-label">Publish Date </label>
                        <input type="date" value="{{ $response['publisheDate'] }}" class="form-control"  name="publisheDate" id="" >
                    </div>
                    <div class="col-lg-6 mb-5  ">
                        <label for="" class="form-label">News Type </label>
                        <select class="form-select" name="newsType" id="newsType" aria-label="Default select example">
                            <option disabled {{ empty($response['newsType']) ? 'selected' : '' }}>Select news type</option>
                            <option value="Sport" {{ $response['newsType'] == 'Sport' ? 'selected' : '' }}>Sport</option>
                            <option value="Political" {{ $response['newsType'] == 'Political' ? 'selected' : '' }}>Political</option>
                            <option value="Technology" {{ $response['newsType'] == 'Technology' ? 'selected' : '' }}>Technology</option>
                            <option value="Entertainment" {{ $response['newsType'] == 'Entertainment' ? 'selected' : '' }}>Entertainment</option>
                        </select>
                    </div>

                  </div>
                    <button type="submit" class="btn btn-primary mb-5">Update News</button>
                  </form>
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
