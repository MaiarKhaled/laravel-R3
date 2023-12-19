<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Post</title>
</head>
<body>
<h1>Title: {{ $posts->title }}</h1>
    <h5>Created at: {{ $posts->created_at }}</h5>
    <h5>Updated at: {{ $posts->updated_at }}</h5>
    <p>Description: {{ $posts->description }}</p>
    <p>Author: {{ $posts->author}}</p>
    <p>Status: {{ $posts->published?"published":"Not Published" }}</p>
    
</body>
</html>