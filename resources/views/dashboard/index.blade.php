<!-- dashboard/index.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container">
        <h1>Dashboard</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->body }}</td>
                        <td>
                            <a href="{{ route('dashboard.edit', $post->id) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ route('dashboard.delete', $post->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('dashboard.create') }}" class="btn btn-success">Add new post</a>
    </div>
</body>

</html>
