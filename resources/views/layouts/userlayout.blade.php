
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>@yield('title','default')</title>
</head>
<body>
    <div class="container-sm text-center m-auto p-3 border" style="background-color: aqua; width: 550px;">
        <p class="text-center d-inline block" style="font-family: cursive; font-size: 80px;">
            TaskSwift
            <img class="d-inline-block" style="height: 60px;" src="{{url('images/logo.png')}}" alt="logopic">
        </p>
        <p class="h3 mb-5">Stay On Track</p>
        

        @yield('content')

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
