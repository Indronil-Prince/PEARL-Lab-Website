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
          <li><a href="{{ url('/publications') }}">Publications</a></li>
          <li><a href="{{ url('/news') }}">News and Events</a></li>
          <li id="present"><a href="{{ url('/people') }}">People</a></li>
        </ul>
      </nav>
    </header>
    <!-- Main Content -->
    <div style="display: flex; width: 100%;">
      <div class="leftDiv" style="margin-left: 12.5%;"><h1><b>Faculty</b></h1></div>
      <div class="rightDiv" style="right:0%"><a href="/login"><button id="member-login">Member Login</button></a></div>
    </div>

    <main style="display: flex;">
      <div class="card">
        <img src="images/nmsu.png" alt="Avatar">
        <div class="container">
          <h4><b>Dr. Abdel-Hameed A. Badawy</b></h4>
          <p>Associate Professor (Full)</p>
          <p>Electrical and Computer Engineering</p>
          <p>badawy@nmsu.edu</p>
          <p>575-646-3115</p>
        </div>
      </div>
    </main>
    <div style="display: flex; width: 100%;">
      <div class="leftDiv" style="margin-left: 12.5%;"><h1><b>Graduate Student</b></h1></div>
    </div>
    <main style="display: flex;">
    @foreach ($users as $user)
    <div class="card">
    <img src="images/{{$user->name}}.png" alt="Avatar">
    <div class="container">
          <h4><b>{{ $user->name }}</b></h4>
          <p>{{ $user->department }}</p>
          <p>{{ $user->email }}</p>
        </div>
</div>
    @endforeach
     
      </main>
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