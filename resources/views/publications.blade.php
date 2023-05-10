<!DOCTYPE html>
<html>
  <head>
    <title>PEARL Lab - Contacts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
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
          <li id="present"><a href="{{ url('/publications') }}">Publications</a></li>
          <li><a href="{{ url('/news') }}">News and Events</a></li>
          <li><a href="{{ url('/people') }}">People</a></li>
        </ul>
      </nav>
    </header>
    <!-- Main Content -->
    <main>
    <div style="display: flex; width: 100%;">
      <div><h1><b>Publications</b></h1></div>
    </div>
    <ol>
                @foreach ($publications as $publication)
                    <li>
                        <b>{{ $publication->title }}</b>;
                        {{ $publication->authors }};
                        {{ $publication->conf_name }};
                        {{ $publication->date }}.
                  </li></br>
                @endforeach
  </ol>
    <main>
    <!-- Footer -->
    <br>
    <br>
    <br>
    <br>
    <footer>
      <p>Copyright &copy; PEARL Lab 2023</p>
    </footer>
  </body>
</html>
<!-- js file linked -->
<script src="script.js"></script>