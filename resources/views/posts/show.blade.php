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
      <a href="{{ route('show') }}"><h2>Post List</h2></a>
    <br/><br/>


    <form class="row g-3" action="{{ route('search') }}" method="GET">
        @csrf

        <div class="col-auto">
          <input type="text" class="form-control"  name="search"  placeholder="Enter Title">
        </div>
        <div class="col-auto">
          <button type="submit" class="btn btn-primary mb-3">Search</button>
          <a href="{{ route('create') }}" type="submit" class="btn btn-success mb-3">Create</a>
        </div>
      </form>


    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
         @foreach ($posts as $post )
          <tr>
            <th>{{ $post->id }}</th>
            <td>{{ $post->title }}</td>
            <td>{{ $post->content }}</td>
            <td scope="col"><a href="/posts/edit/{{ $post->id }}" type="button" class="btn btn-warning">Edit</a></td>
            <td scope="col"><a href="/posts/delete/{{ $post->id }}" type="button" class="btn btn-danger">Delete</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
  </div>
</body>

</html>
