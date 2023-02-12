<!DOCTYPE html>
<html>
<head>
    <title>Company</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="utf-8">
</head>
<body>
<header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="{{ url('/company')}}" class="nav-link px-2 text-secondary">Главная</a></li>
        </ul>

        <div class="text-end">
            <a href="{{ url('/logout')}}" class="nav-link px-2 text-secondary">
                <button type="button" class="btn btn-warning">Выйти</button>
            </a>
        </div>
      </div>
    </div>
</header>
<div class="container" style="mergin">
    @yield('content')
</div>
  
</body>
</html>