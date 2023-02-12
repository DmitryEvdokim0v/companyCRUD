<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body class="text-center">
    @csrf
    <main class="form-signin w-40 m-auto" style="width:400px">
        <form method="POST" action="{{ route('user.registration' )}}">
          <h1 class="h3 mb-3 fw-normal">Регистрация пользователя</h1>
      
          <div class="form-floating">
            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
            <label for="floatingInput">Email</label>
            @error('email')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="password" name="password" placeholder="Пароль">
            <label for="floatingPassword">Пароль</label>
            @error('password')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
          </div>
      
          {{-- <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div> --}}
          {{ csrf_field() }}
          <button class="w-100 btn btn-lg btn-primary" type="submit" name="sendMe">Зарегистрироваться</button>
          {{-- <p class="mt-5 mb-3 text-muted">© 2017–2022</p> --}}
        </form>
      </main>
</body>
</html>