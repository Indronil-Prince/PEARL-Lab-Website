<!DOCTYPE html>
<html>
  <head>
    <title>PEARL Lab</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="script" type="JavaScript" href="script.js">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style copy.css') }}">
  </head>
  <body>
    <!-- Header -->
    <header>
      <img style="position: absolute; z-index: 10; width: 2.5%; height: auto;" src="images/nmsu.png">
      <h1 style="text-align: center; font-size: 24px; margin-left: 3%">Performance Evaluation and Architecture Research Laboratory</h1>
      <!-- Navigation -->
      <nav>
        <ul>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('/research') }}">Research</a></li>
          <li><a href="{{ url('/publications') }}">Publications</a></li>
          <li><a href="{{ url('/news') }}">News and Events</a></li>
          <li><a href="{{ url('/people') }}">People</a></li>
        </ul>
      </nav>
    </header>
    <!-- Main Content -->
    <main>
      <!DOCTYPE html>
      <html>
      <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <style>
      body {font-family: Arial, Helvetica, sans-serif;}
      
      input[type=text], input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
      }
      
      #loginbutton {
        background-color: rgb(151, 1, 53);
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
      }
      
      .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
      }
      
      img.avatar {
        width: 40%;
        border-radius: 50%;
      }
      
      .container {
        padding: 16px;
      }
      
      span.psw {
        float: right;
        padding-top: 16px;
      }
      
      /* Change styles for span and cancel button on extra small screens */
      @media screen and (max-width: 300px) {
        span.psw {
           display: block;
           float: none;
        }
      }
      </style>
      </head>
      <body>
      
      <form action="{{ route('store') }}" method="post">
        <div class="imgcontainer">
          <h1>ADMIN ACCESS ONLY<h1>
          <h3> PEARL Lab Member Register </h3>
        </div>
      
        <div class="container"style="margin-left:30%;margin-right:30%;">
          {{ csrf_field() }}
          <label for="name"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="name" required>

          <input type="hidden" value="12345678" name="password" required>

          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" required>

          <label for="department"><b>Department</b></label>
          <input type="text" placeholder="Enter Department" name="department" required>

          <label for="github"><b>Github Username</b></label>
          <input type="text" placeholder="Enter Github Username" name="github" required>

          <input type="hidden" value="0" name="access_level" required>

          <button type="submit" id="loginbutton">Register New Member</button>
         
        </div>
      </form>
      
      </body>
      </html>
         </section>
    <!-- Footer -->
    <footer >
      <p>Copyright &copy; PEARL Lab 2023</p>
    </footer>
  </body>
</html>
<!-- js file linked -->
<script src="script.js"></script>