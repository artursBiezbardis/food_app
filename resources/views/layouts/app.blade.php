<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Food</title>
</head>
<body>
<body class="bg-green-50 m-0 p-0">
<nav class="p-6 bg-blue-100 flex justify-between mb-2">
    <ul class="flex items-center space-x-5">
        <li>
            <a href="{{ route('home') }}" class="p-3">Home</a>
        </li>

        <li>
            <a href="{{ route('dashboard') }}" class="p-3">Dashboard</a>
        </li>
        <li>
            <a href="{{ route('posts') }}" class="p-3">Post</a>
        </li>

    </ul>
    <ul class="flex items-center space-x-5">
        @auth
            <li>
                <a class="p-3">{{auth()->user()->name}}</a>
            </li>

            <form action="{{route('logout')}}" method="post" class="inline">
                @csrf
                <li>
                    <button type="submit"  >Logout</button>
                </li>
                @endauth

                @guest
                    <li>
                        <a href="{{ route('login') }}" class="p-3">Login</a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}" class="p-3">Register</a>
                    </li>
        @endguest


    </ul>

</nav>
@yield('content')
</body>
</html>
