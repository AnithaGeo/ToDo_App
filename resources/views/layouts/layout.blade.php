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
            <img class="d-inline-block" style="height: 30px;" src="{{url('images/logo.png')}}" alt="logopic">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="{{'addtask'}}">Add Task <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="{{'index'}}">View Task</a>
                    <a class="nav-item nav-link dropdown show dropdown-toggle" href="#" id="navbarDropdownMenulink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="lni lni-user"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenulink">
                        <a class="dropdown-item" href="{{'profile'}}">Dashboard</a>
                        <a class="dropdown-item" href="#">Logout</a>
                    </div>
                </div>
            </div>
          </nav>
    </div>

    @yield('content')


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>

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