@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-end mb-2">
        <a href="{{ route('posts.create') }}" class="btn btn-success">Add Post</a>
    </div>
    <div class="card card-default">
        <div class="card-header">Posts</div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <th>Name</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->name }}</td>
                            <td>
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info btn-sm">Edit</a>
                                <button class="btn btn-danger btn-sm" onclick="handleDelete({{ $post->id }})">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Modal -->
            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form action="" method="POST" id="deletepostForm">
                        @csrf
                        @method('DELETE')
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel">Delete post</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="text-center text-bold">
                                    Are you sure want to delete this post ? 
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Go back</button>
                                <button type="submit" class="btn btn-danger">Yes, Delete</button>
                            </div>
                        </div>                        
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function handleDelete(id) {
            var form = document.getElementById('deletepostForm');
            form.action ='/posts/' + id
            console.log('deleting.', form)
            $('#deleteModal').modal('show')
        }
    </script>
@endsection