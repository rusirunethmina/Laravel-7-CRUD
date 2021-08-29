<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</head>

<body>
          <!--navbar -->
          <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
              <a class="navbar-brand" href="/">CRUD</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('create') }}">Create</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('show') }}">Show</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('search') }}">Search</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <!--navbar -->
          <br/>

  <div class="container">
      <h2>Update Post</h2>
    <form action="/posts/{{ $post->id }}" method="POST">
        @method('PUT')
        @csrf

        <div class="form-group">
          <label for="exampleInputEmail1">Titel</label>
          <input type="text" class="form-control" id="title"  name="title" value="{{ $post->title }}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Content</label>
          <input type="text" class="form-control" id="content"  name="content"  value="{{ $post->content }}">
        </div><br>
        <button type="submit" class="btn btn-primary">Update</button><br><br><br>
        <a href="{{ route('show') }}" type="submit" class="btn btn-danger">Cancle</a><br><br><br>
      </form>
    </div>
</body>

</html>
