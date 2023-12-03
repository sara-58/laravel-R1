<!DOCTYPE html>
<html lang="en">

<head>
    <title>News</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>News</h2>
        <form action="{{route('News')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title :</label>
                <input type="text" class="form-control" id="title" placeholder="Enter Title" name="newsTitle" value="{{old('newsTitle')}}">
                @error('newsTitle')
                <div class="alert alert-info">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="content">Content :</label>
                <input type="text" class="form-control" id="content" placeholder="Enter Content" name="content" value="{{old('content')}}">
                @error('content')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="checkbox">
                <label><input type="checkbox" name="published"> Is Published ?</label>
            </div>
            <div class="form-group">
                <label for="author">Author :</label>
                <input type="text" class="form-control" id="author" placeholder="Enter Author" name="author" value="{{old('author')}}">
                @error('author')
                <div class="alert alert-success">
                    {{$message}}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-default">Add</button>
        </form>
    </div>

</body>

</html>