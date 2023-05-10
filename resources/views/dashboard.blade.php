<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style copy.css') }}">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <title>Member Dashboard</title>
  <style>
    .carousel-item {
      display: flex;
      flex-direction: row;
      justify-content: space-around;
      align-items: center;
      height: 200px;
    }
    </style>
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
          <li><a href="{{ url('/people') }}">People</a></li>
          </ul>
        </nav>
      </header>
  <div class="container">
    <div class="member-card card">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="images/{{$name}}.png" id="dash" class="card-img" alt="Profile Picture">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h3 class="card-title">{{ $name }}</h3>
            <p class="card-text">Department of {{ $department }}</p>
            <p class="card-text">{{ $email }}</p>
              <form action="{{ route('logout') }}" method="POST">
    @csrf
    <button id="logoutbutton" type="submit">Logout</button>
</form>
    <a id="reg" href="{{ url('/member-register') }}"><button id="regbutton" style="display: {{$access_level==2 ? 'block' : 'none' }};">Register Member</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <h3 style="text-align: center;">Github Repos</h3>
  <div>
    <div id="github-repos-carousel" class="carousel slide" data-ride="carousel">
        
        <div class="carousel-inner" id="carousel-inner"></div>
        <a class="carousel-control-prev" href="#github-repos-carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#github-repos-carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script>
        $(document).ready(function() {
          var username = @json($github);
          var url = 'https://api.github.com/users/' + username + '/repos';
    
          $.getJSON(url, function(data) {
            var repos = '';
            var counter = 0;
    
            $.each(data, function(index, repo) {
              if (counter % 3 === 0) {
                repos += '<div class="carousel-item' + (counter === 0 ? ' active' : '') + '"><div class="container"><div class="row">';
              }
    
              repos += '<div class="col-md-4">';
                repos += '<a href="https://github.com/';
                repos += repo.url.slice(29);
                repos += '"><img src="https://gh-card.dev/repos/';
                repos += repo.url.slice(29);
                repos += '.svg"></a>';
              repos += '</div>';
    
              if (counter % 3 === 2 || index === data.length - 1) {
                repos += '</div></div></div>';
              }
              counter++;
            });
    
            $('#carousel-inner').html(repos);
            $('#github-repos-carousel').carousel();
          });
        });
      </script>
  </div>

  <div class="container">
    <div class="add-card card">
      <div class="row no-gutters">
        <div class="col-md-6">
            <form action="{{ route('update') }}" method="post">
                <div class="imgcontainer">
                  <h3 style="text-align: center;"> Add Publications </h3>
                </div>
              
                <div class="container">
                {{ csrf_field() }}
                  <input type="hidden" name="uname" value="{{ $email }}" required>
                  <label for="title"><b>Title</b></label>
                  <input type="text" placeholder="Enter Title" name="title" required>
              
                  <label for="authors"><b>Authors</b></label>
                  <input type="text" placeholder="Enter Authors" name="authors" required>

                  <label for="conf_name"><b>Journal/Conference Name</b></label>
                  <input type="text" placeholder="Enter Journal/Conference Name" name="conf_name" required>
                  
                  <label for="date"><b>Date</b></label>
                  <input type="text" placeholder="Enter Date MM/DD/YYYY" name="date" required>
                      
                  <button type="submit" id="loginbutton">Add</button>
                 
                </div>
              </form>
        </div>
        <div class="col-md-6">
          <div class="card-body">
            <form action="{{ route('updatenews') }}" method="post">
                <div class="imgcontainer">
                    <h3 style="text-align: center;"> Add News </h3>
                </div>
              
                <div class="container">
                {{ csrf_field() }}
                  <input type="hidden" name="uname" value="{{ $email }}" required>
                  <label for="news-title"><b>News Title</b></label>
                  <input type="text" placeholder="Enter News Title" name="news_title" required>
              
                  <label for="news-detail"><b>News Detail</b></label>
                  <input type="text" placeholder="Enter News Detail" name="news_detail" required>
                      
                  <button type="submit" id="loginbutton">Add</button>
                 
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
      </br> </br> </br>

  <footer >
      <p>Copyright &copy; PEARL Lab 2023</p>
    </footer>
  </body>
</html>
