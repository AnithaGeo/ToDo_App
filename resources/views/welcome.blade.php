<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite(['resources/css/home.css'])
</head>
<body>
    <div class="wrapper">
        <div class="box a">
            <img src="{{url('images/todo.jpg')}}" alt="">
        </div>
        <div class="box b">
            <h1>TaskSwift</h1><br>
            <h4>Stay on Track</h4>
        </div>
        <div class="box c">
            <button>Register</button>
            <button>Login</button>
        </div>
    </div>
</body>
</html>