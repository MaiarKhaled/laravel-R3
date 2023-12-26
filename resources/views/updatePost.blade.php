<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Post</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    @include('includes.postsnav')
<div class="container">
  <h2>Update Post</h2>
  <form action="{{ route('updateP' , $posts->id) }}" method="post">
    @csrf
    @method('put')
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="{{ $posts->title }}">
      @error('title')
        {{ $message }}
      @enderror 
    </div>
    <div class="form-group">
      <label for="description">Description:</label>
      <textarea class="form-control" name="description" id="" cols="60" rows="3">{{ $posts->description }}</textarea>
      @error('description')
        {{ $message }}
      @enderror 
    </div>
    <div class="form-group">
      <label for="author">Author:</label>
      <textarea class="form-control" name="author" id="" cols="60" rows="3">{{ $posts->author }}</textarea>
      @error('author')
        {{ $message }}
      @enderror 
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="published" @checked($posts->published)> Published me</label>
    </div>
    <button type="submit" class="btn btn-default">Update</button>
  </form>
</div>

</body>
</html>