<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />
    <title>@section('title','default')</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" style="font-family: cursive; font-size: 35px" href="#">TaskSwift</a>
            <img class="d-inline-block ml-lg-auto" style="height: 30px;" src="{{url('images/logo.png')}}" alt="logopic">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                      <a class="nav-link active" href="{{route('pages.addtask')}}">Add Task <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{route('pages.index')}}">View Task</a>
                  </li>
                  <li class="nav-item dropdown show">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenulink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="lni lni-user"></i>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenulink">
                          <a class="dropdown-item" href="{{route('pages.profile')}}">Dashboard</a>
                          <a class="dropdown-item" href="{{route('pages.login')}}">Logout</a>
                      </div>
                  </li>
              </ul>
          </div>
        </nav>
    </div>

    @yield('content')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
      //dropdown list
      function toggleDropdown() {
        var dropdown = document.querySelector('.dropdown-toggle');
        var dropdownMenu = document.querySelector('.dropdown-menu');
        dropdown.classList.toggle('show');
        dropdownMenu.classList.toggle('show');
    }

    // Event listener to toggle the dropdown on click
    var dropdownToggle = document.querySelector('.dropdown-toggle');
    dropdownToggle.addEventListener('click', function (e) {
        e.preventDefault();
        toggleDropdown();
    });

    // Event listener to close the dropdown when clicking outside
    document.addEventListener('click', function (e) {
        var dropdown = document.querySelector('.dropdown-toggle');
        if (!dropdown.contains(e.target)) {
            var dropdownMenu = document.querySelector('.dropdown-menu');
            if (dropdownMenu.classList.contains('show')) {
                toggleDropdown();
            }
        }
    });

        //Toggle between completed
        const toggleButton = document.getElementById('toggleButton');
      
        toggleButton.addEventListener('click', function () {
            toggleButton.classList.toggle('btn-primary'); 
            toggleButton.classList.toggle('btn-success');
          const isPressed = toggleButton.getAttribute('aria-pressed') === 'true';
      
          if (isPressed) {
            toggleButton.innerText = 'Mark As Complete';
            toggleButton.setAttribute('aria-pressed', 'false');
          } else {
            toggleButton.innerText = 'Completed';
            toggleButton.setAttribute('aria-pressed', 'true');
          }
        });
      </script>
</body>
</html>