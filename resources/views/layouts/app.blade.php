<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menus Project</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #2c3e50;
            padding: 15px 30px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
            padding: 8px 14px;
            border-radius: 5px;
        }

        nav a:hover {
            background-color: #34495e;
        }

        .active {
            background-color: #1abc9c;
            font-weight: bold;
        }

        .container {
            width: 80%;
            margin: 30px auto;
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        footer {
            margin-top: 40px;
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 15px;
        }

        img {
            max-width: 250px;
            border-radius: 10px;
            margin-top: 15px;
        }
    </style>
</head>
<body>

    <header>
        <nav>
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            <a href="{{ route('photos') }}" class="{{ request()->routeIs('photos') ? 'active' : '' }}">Photos</a>
            <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
        </nav>
    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <p>Actividad realizada por: Cristopher Díaz</p>
        <p>Materia: Desarrollo Backend con Laravel</p>
    </footer>

</body>
</html>