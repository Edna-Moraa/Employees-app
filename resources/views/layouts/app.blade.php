<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>EMPLOYEES APP</title>
    @vite(['resources/sass/app.scss','resources/js/app.js'])
</head>
<body>
   
    <nav class="navbar navbar-expand-sm navbar-dark bg-secondary">
<div class="container">
        <a class="navbar-brand" href="/">Employees App</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('employees.index')}}" aria-current="page">Employees List <span class="visually-hidden">(current)</span></a>
                </li>
               
            </ul>
            
        </div>
    </div>
</nav>
<div class="my-5">
    @yield('content')
</div>
</body>
</html>