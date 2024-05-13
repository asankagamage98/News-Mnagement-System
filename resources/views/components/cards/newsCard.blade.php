<div class="card row mb-3">
    <div class="col-lg-12 card-header">
        <h2>{{ $res['title'] }}</h2>
    </div>
    <div class="row d-flex">
        <div class="col-lg-6"><p>Author: {{ $res['authorName'] }}</p></div>
        <div class="col-lg-6"><p>Published Date: {{ $res['publisheDate'] }}</p></div>
    </div>
    <div class="card-body col-lg-12">
        {{ $res['content'] }}
    </div>
    <div class="card-footer col-lg-12">
        Footer
    </div>
</div>
