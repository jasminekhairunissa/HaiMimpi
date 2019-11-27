@extends(backpack_view('layouts.top_left'))

@section('content')

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Timeline</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

    @foreach($articles as $article)

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4">{{ $article->title }}</h1>

        <!-- Author -->
        <p class="lead">
          by
          <a href="#">{{ $article->user->name }}</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on {{ $article->date->format('d F Y') }}</p>
        <p>Category: <a href="">{{ $article->category->name }}</a></p>

        <hr>

        <!-- Preview Image -->
        @if($article->image)
        <img class="img-fluid rounded" src="{{ asset($article->image) }}" alt="">
        @endif

        <hr>

        <!-- Post Content -->
        <p>{!! $article->content !!}</p>
        <hr>

      </div>
      @endforeach

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
            @foreach($categories as $category)
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">{{ $category->name }}</a>
                  </li>
                </ul>
              </div>
            @endforeach
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
            
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

</body>

@endsection
