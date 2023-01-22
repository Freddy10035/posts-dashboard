<!-- dashboard/delete.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Delete Post</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container">
        <h1>Delete Post</h1>
        <form method="POST" action="/dashboard/delete/{{ $post->id }}">
            @csrf
            @method('DELETE')
            <p>Are you sure you want to delete the post "{{ $post->title }}"?</p>
            <button type="submit" class="btn btn-danger">Delete</button>
            <a href="/dashboard" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>

</html>
