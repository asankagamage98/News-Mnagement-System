@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-lg-12">
                <h1 class="col-lg-12 page-title text-center">
                    Create a new news
                </h1>
            </div>
            <div class="col-lg-12 justify-content-center">
                <form action="{{ route('news.create') }}" method="post" enctype="multipart/form-data">
                   @csrf
                    <div class="mb-3">
                      <label for="" class="form-label">News Title </label>
                      <input type="text" class="form-control"  name="title"  id="" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Content</label>
                        <textarea class="form-control"  name="content" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Author Name </label>
                        <input type="text" class="form-control" name="autherName"  id="" >
                    </div>
                  <div class="row d-flex ">
                    <div class="col-lg-6 mb-3">
                        <label for="" class="form-label">Publish Date </label>
                        <input type="date" class="form-control"  name="publisheDate" id="" >
                    </div>
                    <div class="col-lg-6 mb-5  ">
                        <label for="" class="form-label">News Type </label>
                        <select class="form-select " name="newsType"  aria-label="Default select example">
                            <option selected>select news type</option>
                            <option value="Sport">Sport</option>
                            <option value="Political">Political</option>
                            <option value="technology">Technology</option>
                            <option value="entertainment">Entertainment</option>
                        </select>
                    </div>

                  </div>
                    <button type="submit" class="btn btn-primary mb-5">Publish News</button>
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
