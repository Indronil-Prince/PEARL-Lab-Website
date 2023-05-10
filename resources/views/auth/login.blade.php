<!DOCTYPE html>
<html>
  <head>
    <title>PEARL Lab</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style copy.css') }}">
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
        .cancelbtn {
           width: 100%;
        }
      }
      </style>
      </head>
      <body>
    <div class="container" style="margin-left:30%;margin-right:30%;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header" style="text-align:center;" ><h1>{{ __('Login') }}</h1></div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus  style="width:95%;padding:2%;">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button id="loginbutton" type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<footer >
      <p>Copyright &copy; PEARL Lab 2023</p>
    </footer>
  </body>
</html>