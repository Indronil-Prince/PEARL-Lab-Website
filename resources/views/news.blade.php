<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <title>PEARL News</title>
  </head>
  <body>
    <!-- Header -->
    <header>
      <img style="position: absolute; z-index: 10; width: 2.5%; height: auto;" src="{{ asset('images/nmsu.png') }}">
        <h1 style="text-align: center; font-size: 24px; margin-left: 3%">Performance Evaluation and Architecture Research Laboratory</h1>
        <!-- Navigation -->
        <nav>
          <ul>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('/research') }}">Research</a></li>
          <li><a href="{{ url('/publications') }}">Publications</a></li>
          <li id=present><a href="{{ url('/news') }}">News and Events</a></li>
          <li><a href="{{ url('/people') }}">People</a></li>
          </ul>
        </nav>
      </header>
  <div class="container">
    <h1 style="text-align:center; margin-top:2.5%;">PEARL News</h1>
  @foreach ($news as $news1)
    <div class="member-card card" style="width:auto;">
      <div class="row no-gutters">
        <div class="col-md-12">
          <div class="card-body">
            <h3 class="card-title">{{ $news1->title }}</h3>
            <p class="card-text">
            {{ $news1->detail }}
                
            </p>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</br></br></br>
  <footer >
      <p>Copyright &copy; PEARL Lab 2023</p>
    </footer>
  </body>
</html>
