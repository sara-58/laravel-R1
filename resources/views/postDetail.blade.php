<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> Post Details </h1>
    <h2>Post Title :</h2> {{ $post->newsTitle}}
    <br>
    <h2>Post Description :</h2> {{ $post->content}}
    <br>
    <h2>Post Published :</h2> {{ $post->published}}
    <br>
    <h2>Post Author :</h2> {{ $post->author}}
</body>

</html>