
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <style>
    body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .content {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            font-size: 2em;
            margin-bottom: 0.5em;
        }

        p {
            font-size: 1.2em;
        }
    </style>
</head>
<body>

    <div class="content">
        @yield('content')
    </div>
</body>
</html>