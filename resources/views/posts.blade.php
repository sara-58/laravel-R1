<!DOCTYPE html>
<html lang="en">

<head>
    <title>News List</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>News</h2>
        <p>The posts list table rows:</p>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Published</th>
                    <th>Author</th>
                    <th>Edit</th>
                    <th>Details</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{$post->newsTitle}}</td>
                    <td>{{$post->content}}</td>
                    <td>{{$post->published ? 'Yes✅': 'No❌'}}</td>
                    <td>{{$post->author}}</td>
                    <td><a href="editPost/{{$post->id}}">Edit</a></td>
                    <td><a href="postDetail/{{$post->id}}">Show</a></td>
                    <td><a href="deletePost/{{$post->id}}">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>