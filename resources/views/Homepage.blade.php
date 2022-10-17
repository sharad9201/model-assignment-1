@extends('welcome')
@section('content')
<div> Home Page</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Post
</button>
<!-- <a href="{{ route('post') }}" class="text-sm text-gray-700 underline">Post</a> -->

<!-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Post</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-dialog modal-dialog-scrollable">
                <table border="1px">
                    <tr>
                        <th>Postion</th>
                        <th>Status</th>
                        <th>Description</th>
                        <!-- <th>Posted By</th> -->
                    </tr>
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{$post['postion']}}</td>
                        <td>{{$post['status']}}</td>
                        <td>{{$post['description']}}</td>
                        <!-- <td>{{$post->user['name']}}</td> -->
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div> -->
@endsection