<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style copy.css') }}">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <title>Member Dashboard</title>
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
    <div class="member-card card" style="border:1%;">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="images/research1.png" class="card-img" alt="Profile Picture">
        </div>
        <div class="col-md-8">
          <div class="card-body" style="width:150%;">
            <h3 class="card-title">Hardware Performance Computing</h3>
            <p class="card-text"><ul>
              <li>Memory Optimization</li>
              <li>Performance Evaluation Toolkit</li>
              <li>Modeling and Simulation (ModSim)</li>
              <li>Improving On-Chip communication</li>
              <li>Performance Prediction using Machine Learning Approaches</li>
</ul>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="member-card card" style="border:1%;">
      <div class="row no-gutters">
        <div class="col-md-8">
          <div class="card-body" style="width:150%; margin-left:-25%;">
          <h3 class="card-title">System Level</h3>
            <p class="card-text">
              <ul>
              <li>Computer Architecture and Basic Block</li>              
              <li>Quantum State Fidelities</li>     
              <li>Quantum Netlist Compiler (QNC)</li>     
            </ul>
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <img src="images/research3.png" class="card-img" alt="Profile Picture">
        </div>
      </div>
    </div>

    <div class="member-card card" style="border:1%;">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="images/research2.png" class="card-img" alt="Profile Picture">
        </div>
        <div class="col-md-8">
          <div class="card-body" style="width:150%;">
          <h3 class="card-title">Hardware Security and vulnerabilities</h3>
            <p class="card-text"><ul>
              <li> Multi-criteria hardware trojan detection</li>
              <li> Securing network on-chip fault injection</li>
              <li> Malicious Thermal Sensor Attacks</li>
          </ul>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</br></br></br>
  <footer >
      <p>Copyright &copy; PEARL Lab 2023</p>
    </footer>
  </body>
</html>
