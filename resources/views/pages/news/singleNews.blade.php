@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-lg-12">
                <h1 class="col-lg-12 page-title text-center">
                    {{ $response['title'] }}
                </h1>
            </div>
            <hr>
            </hr>
            <div class="col-lg-12 d-flex align-items-center gap-3 pb-3 pt-3">
                <!-- Use a form with the DELETE method override -->
                <form id="delete-form"  action="{{ route('news.delete', $response['id']) }}" method="POST" class="mb-0">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-link p-0" onclick="confirmDelete(event)">
                        <i class="fa-regular fa-trash-can fa-xl" style="color: #616161;"
                            onmouseover="this.style.color='#FF0000'" onmouseout="this.style.color='#616161'"></i>
                    </button>
                </form>

                <a href="{{ route('news.editNews', $response['id']) }}" class="btn p-0 ms-2">
                    <i class="fa-solid fa-pen-to-square fa-xl" style="color: #616161;"
                        onmouseover="this.style.color='#00FF00'" onmouseout="this.style.color='#616161'"></i>
                </a>
            </div>
            <hr>
            </hr>
            <div class="col-lg-12 justify-content-center">
                <p>{{ $response['content'] }}</p>
            </div>
            <hr>
            </hr>
            <div>
                <div class="row d-flex">
                    <div class="col-lg-6">
                        <p>Author: {{ $response['autherName'] }}</p>
                    </div>
                    <div class="col-lg-6">
                        <p>news category: {{ $response['newsType'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('css')
        <style>
            .page-title {
                padding-top: 10vh;
                font-size: 2rem;
                color: rgb(0, 113, 206);
            }
        </style>
    @endpush

    @push('js')
        <!-- SweetAlert2 JS -->
        <script>
            function confirmDelete(event) {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('delete-form').submit();
                    }
                    Swal.fire({
                    title: 'Deleted!',
                    text: "{{ session('success') }}",
                    icon: 'success',
                    confirmButtonColor: '#3085d6'
            });
                })
            }
          
        </script>
    @endpush
@endsection
