<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    @vite(['resources/css/dashboard.css'])
</head>
<body>
    <div class="wrapper">
        <div class="box a">
            <img src="{{url('images/todo.jpg')}}" alt="todoimg">
        </div>
        <div class="box b">
            <p>
                TaskSwift
                <img src="{{url('images/logo.png')}}" alt="logo">
            </p>
            <h4>Stay on Track</h4>
        </div>
        <div class="box c">
            <button>Register</button>
            <button>Login</button>
        </div>
    </div>
</body>
</html>