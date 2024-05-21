<div class="card row mb-3 m-2">
    <div class="col-lg-12">
        <div class="row d-flex ">
            <h3 class="text-secondary">{{ $res['title'] }}</h3>
        </div>
        <div class="row d-flex">
            <div class="col-lg-6"><p>Author: {{ $res['autherName'] }}</p></div>
            <div class="col-lg-6"><p>news type: {{ $res['newsType'] }}</p></div>
        </div>
    </div>

    <div class=" col-lg-12 text-center">
        {{ $res['content'] }}
    </div>
    <div class="col-12 card-footer">
        <div class=" row d-flex ">
            <div class="col-lg-6"><p>Published Date: {{ $res['publisheDate'] }}</p></div>
            <div class="col-lg-6">
                <a href="{{ route('news.view', $res['id'] ) }}"> <button type="button" class="btn btn-outline-info float-end">view more..</button></a>
            </div>
        </div>
    </div>

</div>
