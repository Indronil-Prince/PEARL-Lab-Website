<!DOCTYPE html>
<html>
  <head>
    <title>PEARL Home</title>
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
          <li id="present"><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('/research') }}">Research</a></li>
          <li><a href="{{ url('/publications') }}">Publications</a></li>
          <li><a href="{{ url('/news') }}">News and Events</a></li>
          <li><a href="{{ url('/people') }}">People</a></li>
        </ul>
      </nav>
    </header>
    <section id="banner" style="background: url('images/Organ-Mtns.jpg');background-size: cover;">PEARL</section>
    <!-- Main Content -->
    <main>
      <!-- Intro -->
      <section id="intro" style="display: flex;">
        <div style="margin: 5% 5% 5% 5%;"><h1 id="name"><b>Welcome to the Performance Evaluation and Architecture Research Laboratory (Pearl) Website</b></h1>
        <p style="text-align: justify;">The prime focus of our research is to investigate and improve the performance of computer architecture at the very basic level. We aim to design and develop cutting-edge techniques and methodologies to evaluate the system for better output. Some of our core interest includes architecture analysis, compiler, memory hierarchy, basic blocks, quantum state, exploring CPU-GPU performance, and simulation. We also engage emerging machine learning techniques in order to predict the efficiency of computer systems. Our team is comprised of experts in electrical engineering and computer science, who work together to advance the field of computer architecture and enable the development of faster and more reliable systems.</p>
      </div>
    </section>
<!-- Footer -->
    <footer>
        <p>Copyright &copy; PEARL Lab 2023</p>
    </footer>
   </body>
</html>
<!-- js file linked -->
<script src="script.js"></script>